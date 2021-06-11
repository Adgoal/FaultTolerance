<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\RabbitEnqueue\Exception;

use AdgoalCommon\Base\Domain\Exception\CriticalException;

/**
 * Class MessageWasNotSentToQueueException.
 *
 * @category Domain\Exception\Program
 */
final class MessageWasNotSentToQueueException extends CriticalException
{
}
