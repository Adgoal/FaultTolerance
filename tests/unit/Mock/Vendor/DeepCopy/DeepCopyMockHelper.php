<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\Tests\Unit\Mock\Vendor\DeepCopy;

use DeepCopy\DeepCopy;
use Mockery;
use Mockery\MockInterface;

/**
 * Mock helper trait.
 */
trait DeepCopyMockHelper
{
    /**
     * Create and return mock object for class DeepCopy\DeepCopy.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|DeepCopy
     */
    protected function createDeepCopyDeepCopyMock(
        array $mockArgs = ['skipUncloneable' => '', 'copy' => '', 'addFilter' => '', 'prependFilter' => '', 'addTypeFilter' => ''],
        array $mockTimes = ['skipUncloneable' => 0, 'copy' => 0, 'addFilter' => 0, 'prependFilter' => 0, 'addTypeFilter' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\DeepCopy\DeepCopy', DeepCopy::class);

        if (array_key_exists('skipUncloneable', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('skipUncloneable');

            if (null === $mockTimes['skipUncloneable']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['skipUncloneable'])) {
                $mockMethod->times($mockTimes['skipUncloneable']['times']);
            } else {
                $mockMethod->times($mockTimes['skipUncloneable']);
            }
            $mockMethod->andReturnSelf();
        }

        if (array_key_exists('copy', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('copy');

            if (null === $mockTimes['copy']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['copy'])) {
                $mockMethod->times($mockTimes['copy']['times']);
            } else {
                $mockMethod->times($mockTimes['copy']);
            }
            $mockMethod->andReturn($mockArgs['copy']);
        }

        if (array_key_exists('addFilter', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('addFilter');

            if (null === $mockTimes['addFilter']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['addFilter'])) {
                $mockMethod->times($mockTimes['addFilter']['times']);
            } else {
                $mockMethod->times($mockTimes['addFilter']);
            }
            $mockMethod->andReturn($mockArgs['addFilter']);
        }

        if (array_key_exists('prependFilter', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('prependFilter');

            if (null === $mockTimes['prependFilter']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['prependFilter'])) {
                $mockMethod->times($mockTimes['prependFilter']['times']);
            } else {
                $mockMethod->times($mockTimes['prependFilter']);
            }
            $mockMethod->andReturn($mockArgs['prependFilter']);
        }

        if (array_key_exists('addTypeFilter', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('addTypeFilter');

            if (null === $mockTimes['addTypeFilter']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['addTypeFilter'])) {
                $mockMethod->times($mockTimes['addTypeFilter']['times']);
            } else {
                $mockMethod->times($mockTimes['addTypeFilter']);
            }
            $mockMethod->andReturn($mockArgs['addTypeFilter']);
        }

        return $mock;
    }
}
