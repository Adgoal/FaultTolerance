<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\Tests\Unit\Mock\Vendor\Enqueue;

use Enqueue\Client\ProducerInterface;
use Mockery;
use Mockery\MockInterface;

/**
 * Mock helper trait.
 */
trait ClientMockHelper
{
    /**
     * Create and return mock object for class Enqueue\Client\ProducerInterface.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|ProducerInterface
     */
    protected function createEnqueueClientProducerInterfaceMock(
        array $mockArgs = ['sendEvent' => '', 'sendCommand' => ''],
        array $mockTimes = ['sendEvent' => 0, 'sendCommand' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Enqueue\Client\ProducerInterface', ProducerInterface::class);

        if (array_key_exists('sendEvent', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sendEvent');

            if (null === $mockTimes['sendEvent']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sendEvent'])) {
                $mockMethod->times($mockTimes['sendEvent']['times']);
            } else {
                $mockMethod->times($mockTimes['sendEvent']);
            }

            if (is_array($mockArgs['sendEvent']) && isset($mockArgs['sendEvent']['exception'])) {
                if (!is_array($mockArgs['sendEvent']['exception'])) {
                    $mockArgs['sendEvent']['exception'] = [$mockArgs['sendEvent']['exception'], 'sendCommand method exception'];
                }
                $mockMethod->andThrow($mockArgs['sendEvent']['exception'][0], $mockArgs['sendEvent']['exception'][1]);
            }
        }

        if (array_key_exists('sendCommand', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sendCommand');

            if (null === $mockTimes['sendCommand']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sendCommand'])) {
                $mockMethod->times($mockTimes['sendCommand']['times']);
            } else {
                $mockMethod->times($mockTimes['sendCommand']);
            }
            $enqueueRpcPromiseMock = $this->createEnqueueRpcPromiseMock($mockArgs['sendCommand'], $mockTimes['sendCommand']);
            $mockMethod->andReturn($enqueueRpcPromiseMock);

            if (is_array($mockArgs['sendCommand']) && isset($mockArgs['sendCommand']['exception'])) {
                if (!is_array($mockArgs['sendCommand']['exception'])) {
                    $mockArgs['sendCommand']['exception'] = [$mockArgs['sendCommand']['exception'], 'sendCommand method exception'];
                }
                $mockMethod->andThrow($mockArgs['sendCommand']['exception'][0], $mockArgs['sendCommand']['exception'][1]);
            }
        }

        return $mock;
    }
}
