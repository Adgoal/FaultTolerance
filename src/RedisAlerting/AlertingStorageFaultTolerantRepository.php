<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\RedisAlerting;

use AdgoalCommon\Alerting\Domain\Exception\StorageException;
use AdgoalCommon\Alerting\Domain\Repository\StorageRepositoryInterface;
use AdgoalCommon\Base\Utils\LoggerTrait;
use Closure;
use Redis;
use RedisException;

/**
 * Class AlertingStorageFaultTolerantRepository.
 */
class AlertingStorageFaultTolerantRepository implements StorageRepositoryInterface
{
    use LoggerTrait;

    private const DEFAULT_RETRY_TIMEOUT = 100000;
    private const DEFAULT_RETRY_ATTEMPTS = 3;

    /**
     * Redis.
     *
     * @var Redis
     */
    private $redis;

    /**
     * Connection config.
     *
     * @var mixed[]
     */
    private $config;

    /**
     * @var int
     */
    private $retryAttempts;

    /**
     * Connection timeout retry in microsecond.
     *
     * @var int
     */
    private $retryTimeout;

    /**
     * ProgramResultRepository constructor.
     *
     * @param Redis    $redis
     * @param mixed[]  $config
     * @param int|null $retryAttempts
     * @param int|null $retryTimeout
     */
    public function __construct(
        Redis $redis,
        array $config,
        ?int $retryAttempts = null,
        ?int $retryTimeout = null
    ) {
        $this->redis = $redis;
        $this->config = $config;
        $this->retryAttempts = $retryAttempts ?? self::DEFAULT_RETRY_ATTEMPTS;
        $this->retryTimeout = $retryTimeout ?? self::DEFAULT_RETRY_TIMEOUT;
        $this->connect();
    }

    /**
     * Initialize redis connection.
     */
    private function connect(): void
    {
        $this->logMessage('Connect to redis instance', LOG_DEBUG);
        $this->redis->connect($this->config['host'], (int) $this->config['port']);
    }

    /**
     * Performs a synchronous save.
     *
     * @return bool TRUE in case of success, FALSE in case of failure.
     *              If a save is already running, this command will fail and return FALSE.
     *
     * @throws RedisException
     * @throws StorageException
     */
    public function save(): bool
    {
        $callback = static function (Redis $redis) {
            if (!$redis->save()) {
                throw new StorageException('Data was not save in redis.');
            }

            return true;
        };

        return $this->runFaultTolerantProcess($callback);
    }

    /**
     * Set the string value in argument as value of the key.
     *
     * @param string      $key
     * @param string      $value
     * @param int|mixed[] $timeout
     *
     * @return bool TRUE if the command is successful
     *
     * @throws RedisException
     * @throws StorageException
     */
    public function set(string $key, string $value, $timeout = 0): bool
    {
        $callback = static function (Redis $redis) use ($key, $value, $timeout) {
            /** @psalm-suppress PossiblyInvalidArgument */
            $result = $timeout ? $redis->set($key, $value, $timeout) : $redis->set($key, $value);

            if (!$result) {
                throw new StorageException('Data was not set in redis.');
            }

            return true;
        };

        return $this->runFaultTolerantProcess($callback);
    }

    /**
     * Get the value related to the specified key.
     *
     * @param string $key
     *
     * @return string|false If key didn't exist, FALSE is returned. Otherwise, the value related to this key is returned.
     *
     * @throws RedisException
     * @throws StorageException
     */
    public function get(string $key)
    {
        $callback = static function (Redis $redis) use ($key) {
            return $redis->get($key);
        };

        return $this->runFaultTolerantProcess($callback);
    }

    /**
     * Fault tolerant sending message to redis.
     *
     * @param Closure $callback
     *
     * @return mixed
     *
     * @throws RedisException
     * @throws StorageException
     */
    private function runFaultTolerantProcess(Closure $callback)
    {
        $retryAttempt = 0;
        $reconnect = false;

        do {
            try {
                if ($reconnect) {
                    $this->connect();
                }

                return $callback($this->redis);
            } catch (RedisException | StorageException $e) {
                usleep($this->retryTimeout);
                ++$retryAttempt;
                $reconnect = true;
                $this->logMessage($this->getExceptionMessage($e), LOG_WARNING);
            }
        } while ($retryAttempt < $this->retryAttempts);

        /* @psalm-suppress PossiblyUndefinedVariable */
        throw $e;
    }
}
