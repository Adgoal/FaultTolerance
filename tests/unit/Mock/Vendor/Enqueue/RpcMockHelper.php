<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\Tests\Unit\Mock\Vendor\Enqueue;

use Enqueue\Rpc\Promise;
use Mockery;
use Mockery\MockInterface;

/**
 * Mock helper trait.
 */
trait RpcMockHelper
{
    /**
     * Create and return mock object for class Enqueue\Rpc\Promise.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Promise
     */
    protected function createEnqueueRpcPromiseMock(
        array $mockArgs = ['receive' => '', 'receiveNoWait' => '', 'setDeleteReplyQueue' => '', 'isDeleteReplyQueue' => ''],
        array $mockTimes = ['receive' => 0, 'receiveNoWait' => 0, 'setDeleteReplyQueue' => 0, 'isDeleteReplyQueue' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Enqueue\Rpc\Promise', Promise::class);

        if (array_key_exists('receive', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('receive');

            if (null === $mockTimes['receive']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['receive'])) {
                $mockMethod->times($mockTimes['receive']['times']);
            } else {
                $mockMethod->times($mockTimes['receive']);
            }

            $interopQueueMessageMock = $this->createInteropQueueMessageMock($mockArgs['receive'], $mockTimes['receive']);
            $mockMethod->andReturn($interopQueueMessageMock);
        }

        if (array_key_exists('receiveNoWait', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('receiveNoWait');

            if (null === $mockTimes['receiveNoWait']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['receiveNoWait'])) {
                $mockMethod->times($mockTimes['receiveNoWait']['times']);
            } else {
                $mockMethod->times($mockTimes['receiveNoWait']);
            }

            $interopQueueMessageMock = $this->createInteropQueueMessageMock($mockArgs['receiveNoWait'], $mockTimes['receiveNoWait']);
            $mockMethod->andReturn($interopQueueMessageMock);
        }

        if (array_key_exists('setDeleteReplyQueue', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setDeleteReplyQueue');

            if (null === $mockTimes['setDeleteReplyQueue']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setDeleteReplyQueue'])) {
                $mockMethod->times($mockTimes['setDeleteReplyQueue']['times']);
            } else {
                $mockMethod->times($mockTimes['setDeleteReplyQueue']);
            }
            $mockMethod->andReturn($mockArgs['setDeleteReplyQueue']);
        }

        if (array_key_exists('isDeleteReplyQueue', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isDeleteReplyQueue');

            if (null === $mockTimes['isDeleteReplyQueue']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isDeleteReplyQueue'])) {
                $mockMethod->times($mockTimes['isDeleteReplyQueue']['times']);
            } else {
                $mockMethod->times($mockTimes['isDeleteReplyQueue']);
            }
            $mockMethod->andReturn($mockArgs['isDeleteReplyQueue']);
        }

        return $mock;
    }
}
