<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\Tests\Unit\Mock\Vendor\Enqueue;

use Enqueue\Consumption\ExtensionInterface;
use Enqueue\Consumption\QueueConsumerInterface;
use Mockery;
use Mockery\MockInterface;

/**
 * Mock helper trait.
 */
trait ConsumptionMockHelper
{
    /**
     * Create and return mock object for class Enqueue\Consumption\QueueConsumerInterface.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|QueueConsumerInterface
     */
    protected function createEnqueueConsumptionQueueConsumerInterfaceMock(
        array $mockArgs = ['setReceiveTimeout' => '', 'getReceiveTimeout' => '', 'getContext' => '', 'bind' => '', 'bindCallback' => '', 'consume' => ''],
        array $mockTimes = ['setReceiveTimeout' => 0, 'getReceiveTimeout' => 0, 'getContext' => 0, 'bind' => 0, 'bindCallback' => 0, 'consume' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Enqueue\Consumption\QueueConsumerInterface', QueueConsumerInterface::class);

        if (array_key_exists('setReceiveTimeout', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setReceiveTimeout');

            if (null === $mockTimes['setReceiveTimeout']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setReceiveTimeout'])) {
                $mockMethod->times($mockTimes['setReceiveTimeout']['times']);
            } else {
                $mockMethod->times($mockTimes['setReceiveTimeout']);
            }
        }

        if (array_key_exists('getReceiveTimeout', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getReceiveTimeout');

            if (null === $mockTimes['getReceiveTimeout']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getReceiveTimeout'])) {
                $mockMethod->times($mockTimes['getReceiveTimeout']['times']);
            } else {
                $mockMethod->times($mockTimes['getReceiveTimeout']);
            }
            $mockMethod->andReturn($mockArgs['getReceiveTimeout']);
        }

        if (array_key_exists('getContext', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getContext');

            if (null === $mockTimes['getContext']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getContext'])) {
                $mockMethod->times($mockTimes['getContext']['times']);
            } else {
                $mockMethod->times($mockTimes['getContext']);
            }

            $interopQueueContextMock = $this->createInteropQueueContextMock($mockArgs['getContext'], $mockTimes['getContext']);
            $mockMethod->andReturn($interopQueueContextMock);
        }

        if (array_key_exists('bind', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('bind');

            if (null === $mockTimes['bind']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['bind'])) {
                $mockMethod->times($mockTimes['bind']['times']);
            } else {
                $mockMethod->times($mockTimes['bind']);
            }
            $mockMethod->andReturnSelf();
        }

        if (array_key_exists('bindCallback', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('bindCallback');

            if (null === $mockTimes['bindCallback']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['bindCallback'])) {
                $mockMethod->times($mockTimes['bindCallback']['times']);
            } else {
                $mockMethod->times($mockTimes['bindCallback']);
            }
            $mockMethod->andReturnSelf();
        }

        if (array_key_exists('consume', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('consume');

            if (null === $mockTimes['consume']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['consume'])) {
                $mockMethod->times($mockTimes['consume']['times']);
            } else {
                $mockMethod->times($mockTimes['consume']);
            }

            if (is_array($mockArgs['consume']) && isset($mockArgs['consume']['exception'])) {
                if (!is_array($mockArgs['consume']['exception'])) {
                    $mockArgs['consume']['exception'] = [$mockArgs['consume']['exception'], 'consume method exception'];
                }
                $mockMethod->andThrow($mockArgs['consume']['exception'][0], $mockArgs['consume']['exception'][1]);
            }
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Enqueue\Consumption\ExtensionInterface.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|ExtensionInterface
     */
    protected function createEnqueueConsumptionExtensionInterfaceMock(
        array $mockArgs = ['onStart' => '', 'onPreSubscribe' => '', 'onPreConsume' => '', 'onMessageReceived' => '', 'onPostMessageReceived' => '', 'onResult' => '', 'onProcessorException' => '', 'onPostConsume' => '', 'onEnd' => '', 'onInitLogger' => ''],
        array $mockTimes = ['onStart' => 0, 'onPreSubscribe' => 0, 'onPreConsume' => 0, 'onMessageReceived' => 0, 'onPostMessageReceived' => 0, 'onResult' => 0, 'onProcessorException' => 0, 'onPostConsume' => 0, 'onEnd' => 0, 'onInitLogger' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Enqueue\Consumption\ExtensionInterface', ExtensionInterface::class);

        if (array_key_exists('onStart', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onStart');

            if (null === $mockTimes['onStart']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onStart'])) {
                $mockMethod->times($mockTimes['onStart']['times']);
            } else {
                $mockMethod->times($mockTimes['onStart']);
            }
        }

        if (array_key_exists('onPreSubscribe', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onPreSubscribe');

            if (null === $mockTimes['onPreSubscribe']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onPreSubscribe'])) {
                $mockMethod->times($mockTimes['onPreSubscribe']['times']);
            } else {
                $mockMethod->times($mockTimes['onPreSubscribe']);
            }
        }

        if (array_key_exists('onPreConsume', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onPreConsume');

            if (null === $mockTimes['onPreConsume']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onPreConsume'])) {
                $mockMethod->times($mockTimes['onPreConsume']['times']);
            } else {
                $mockMethod->times($mockTimes['onPreConsume']);
            }
        }

        if (array_key_exists('onMessageReceived', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onMessageReceived');

            if (null === $mockTimes['onMessageReceived']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onMessageReceived'])) {
                $mockMethod->times($mockTimes['onMessageReceived']['times']);
            } else {
                $mockMethod->times($mockTimes['onMessageReceived']);
            }
        }

        if (array_key_exists('onPostMessageReceived', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onPostMessageReceived');

            if (null === $mockTimes['onPostMessageReceived']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onPostMessageReceived'])) {
                $mockMethod->times($mockTimes['onPostMessageReceived']['times']);
            } else {
                $mockMethod->times($mockTimes['onPostMessageReceived']);
            }
        }

        if (array_key_exists('onResult', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onResult');

            if (null === $mockTimes['onResult']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onResult'])) {
                $mockMethod->times($mockTimes['onResult']['times']);
            } else {
                $mockMethod->times($mockTimes['onResult']);
            }
        }

        if (array_key_exists('onProcessorException', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onProcessorException');

            if (null === $mockTimes['onProcessorException']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onProcessorException'])) {
                $mockMethod->times($mockTimes['onProcessorException']['times']);
            } else {
                $mockMethod->times($mockTimes['onProcessorException']);
            }
        }

        if (array_key_exists('onPostConsume', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onPostConsume');

            if (null === $mockTimes['onPostConsume']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onPostConsume'])) {
                $mockMethod->times($mockTimes['onPostConsume']['times']);
            } else {
                $mockMethod->times($mockTimes['onPostConsume']);
            }
        }

        if (array_key_exists('onEnd', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onEnd');

            if (null === $mockTimes['onEnd']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onEnd'])) {
                $mockMethod->times($mockTimes['onEnd']['times']);
            } else {
                $mockMethod->times($mockTimes['onEnd']);
            }
        }

        if (array_key_exists('onInitLogger', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('onInitLogger');

            if (null === $mockTimes['onInitLogger']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['onInitLogger'])) {
                $mockMethod->times($mockTimes['onInitLogger']['times']);
            } else {
                $mockMethod->times($mockTimes['onInitLogger']);
            }
        }

        return $mock;
    }
}
