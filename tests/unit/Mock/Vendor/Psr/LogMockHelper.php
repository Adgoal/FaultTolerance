<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\Tests\Unit\Mock\Vendor\Psr;

use Mockery;
use Mockery\MockInterface;
use Psr\Log\LoggerInterface;

/**
 * Mock helper trait.
 */
trait LogMockHelper
{
    /**
     * Create and return mock object for class Psr\Log\LoggerInterface.
     *
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|LoggerInterface
     */
    protected function createPsrLogLoggerInterfaceMock(
        array $mockTimes = ['emergency' => 0, 'alert' => 0, 'critical' => 0, 'error' => 0, 'warning' => 0, 'notice' => 0, 'info' => 0, 'debug' => 0, 'log' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Psr\Log\LoggerInterface', LoggerInterface::class);

        if (array_key_exists('emergency', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('emergency');

            if (null === $mockTimes['emergency']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['emergency'])) {
                $mockMethod->times($mockTimes['emergency']['times']);
            } else {
                $mockMethod->times($mockTimes['emergency']);
            }
        }

        if (array_key_exists('alert', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('alert');

            if (null === $mockTimes['alert']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['alert'])) {
                $mockMethod->times($mockTimes['alert']['times']);
            } else {
                $mockMethod->times($mockTimes['alert']);
            }
        }

        if (array_key_exists('critical', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('critical');

            if (null === $mockTimes['critical']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['critical'])) {
                $mockMethod->times($mockTimes['critical']['times']);
            } else {
                $mockMethod->times($mockTimes['critical']);
            }
        }

        if (array_key_exists('error', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('error');

            if (null === $mockTimes['error']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['error'])) {
                $mockMethod->times($mockTimes['error']['times']);
            } else {
                $mockMethod->times($mockTimes['error']);
            }
        }

        if (array_key_exists('warning', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('warning');

            if (null === $mockTimes['warning']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['warning'])) {
                $mockMethod->times($mockTimes['warning']['times']);
            } else {
                $mockMethod->times($mockTimes['warning']);
            }
        }

        if (array_key_exists('notice', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('notice');

            if (null === $mockTimes['notice']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['notice'])) {
                $mockMethod->times($mockTimes['notice']['times']);
            } else {
                $mockMethod->times($mockTimes['notice']);
            }
        }

        if (array_key_exists('info', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('info');

            if (null === $mockTimes['info']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['info'])) {
                $mockMethod->times($mockTimes['info']['times']);
            } else {
                $mockMethod->times($mockTimes['info']);
            }
        }

        if (array_key_exists('debug', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('debug');

            if (null === $mockTimes['debug']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['debug'])) {
                $mockMethod->times($mockTimes['debug']['times']);
            } else {
                $mockMethod->times($mockTimes['debug']);
            }
        }

        if (array_key_exists('log', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('log');

            if (null === $mockTimes['log']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['log'])) {
                $mockMethod->times($mockTimes['log']['times']);
            } else {
                $mockMethod->times($mockTimes['log']);
            }
        }

        return $mock;
    }
}
