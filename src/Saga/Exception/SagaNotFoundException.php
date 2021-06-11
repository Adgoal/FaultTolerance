<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\Saga\Exception;

use AdgoalCommon\Base\Domain\Exception\CriticalException;

/**
 * Class SagaNotFoundException.
 *
 * @category Infrastructure\Utils
 */
class SagaNotFoundException extends CriticalException
{
}
