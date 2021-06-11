<?php

declare(strict_types=1);

namespace AdgoalCommon\FaultTolerance\Tests\Unit\Mock\Vendor\Interop;

use Interop\Queue\Consumer;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Interop\Queue\Processor;
use Interop\Queue\Producer;
use Interop\Queue\Queue;
use Interop\Queue\SubscriptionConsumer;
use Interop\Queue\Topic;
use Mockery;
use Mockery\MockInterface;

/**
 * Mock helper trait.
 */
trait QueueMockHelper
{
    /**
     * Create and return mock object for class Interop\Queue\Message.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Message
     */
    protected function createInteropQueueMessageMock(
        array $mockArgs = ['getBody' => '', 'setBody' => '', 'setProperties' => '', 'getProperties' => '', 'setProperty' => '', 'getProperty' => '', 'setHeaders' => '', 'getHeaders' => '', 'setHeader' => '', 'getHeader' => '', 'setRedelivered' => '', 'isRedelivered' => '', 'setCorrelationId' => '', 'getCorrelationId' => '', 'setMessageId' => '', 'getMessageId' => '', 'getTimestamp' => '', 'setTimestamp' => '', 'setReplyTo' => '', 'getReplyTo' => ''],
        array $mockTimes = ['getBody' => 0, 'setBody' => 0, 'setProperties' => 0, 'getProperties' => 0, 'setProperty' => 0, 'getProperty' => 0, 'setHeaders' => 0, 'getHeaders' => 0, 'setHeader' => 0, 'getHeader' => 0, 'setRedelivered' => 0, 'isRedelivered' => 0, 'setCorrelationId' => 0, 'getCorrelationId' => 0, 'setMessageId' => 0, 'getMessageId' => 0, 'getTimestamp' => 0, 'setTimestamp' => 0, 'setReplyTo' => 0, 'getReplyTo' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\Message', Message::class);

        if (array_key_exists('getBody', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getBody');

            if (null === $mockTimes['getBody']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getBody'])) {
                $mockMethod->times($mockTimes['getBody']['times']);
            } else {
                $mockMethod->times($mockTimes['getBody']);
            }
            $mockMethod->andReturn($mockArgs['getBody']);
        }

        if (array_key_exists('setBody', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setBody');

            if (null === $mockTimes['setBody']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setBody'])) {
                $mockMethod->times($mockTimes['setBody']['times']);
            } else {
                $mockMethod->times($mockTimes['setBody']);
            }
        }

        if (array_key_exists('setProperties', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setProperties');

            if (null === $mockTimes['setProperties']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setProperties'])) {
                $mockMethod->times($mockTimes['setProperties']['times']);
            } else {
                $mockMethod->times($mockTimes['setProperties']);
            }
        }

        if (array_key_exists('getProperties', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getProperties');

            if (null === $mockTimes['getProperties']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getProperties'])) {
                $mockMethod->times($mockTimes['getProperties']['times']);
            } else {
                $mockMethod->times($mockTimes['getProperties']);
            }
            $mockMethod->andReturn($mockArgs['getProperties']);
        }

        if (array_key_exists('setProperty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setProperty');

            if (null === $mockTimes['setProperty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setProperty'])) {
                $mockMethod->times($mockTimes['setProperty']['times']);
            } else {
                $mockMethod->times($mockTimes['setProperty']);
            }
        }

        if (array_key_exists('getProperty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getProperty');

            if (null === $mockTimes['getProperty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getProperty'])) {
                $mockMethod->times($mockTimes['getProperty']['times']);
            } else {
                $mockMethod->times($mockTimes['getProperty']);
            }
            $mockMethod->andReturn($mockArgs['getProperty']);
        }

        if (array_key_exists('setHeaders', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setHeaders');

            if (null === $mockTimes['setHeaders']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setHeaders'])) {
                $mockMethod->times($mockTimes['setHeaders']['times']);
            } else {
                $mockMethod->times($mockTimes['setHeaders']);
            }
        }

        if (array_key_exists('getHeaders', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getHeaders');

            if (null === $mockTimes['getHeaders']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getHeaders'])) {
                $mockMethod->times($mockTimes['getHeaders']['times']);
            } else {
                $mockMethod->times($mockTimes['getHeaders']);
            }
            $mockMethod->andReturn($mockArgs['getHeaders']);
        }

        if (array_key_exists('setHeader', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setHeader');

            if (null === $mockTimes['setHeader']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setHeader'])) {
                $mockMethod->times($mockTimes['setHeader']['times']);
            } else {
                $mockMethod->times($mockTimes['setHeader']);
            }
        }

        if (array_key_exists('getHeader', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getHeader');

            if (null === $mockTimes['getHeader']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getHeader'])) {
                $mockMethod->times($mockTimes['getHeader']['times']);
            } else {
                $mockMethod->times($mockTimes['getHeader']);
            }
            $mockMethod->andReturn($mockArgs['getHeader']);
        }

        if (array_key_exists('setRedelivered', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setRedelivered');

            if (null === $mockTimes['setRedelivered']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setRedelivered'])) {
                $mockMethod->times($mockTimes['setRedelivered']['times']);
            } else {
                $mockMethod->times($mockTimes['setRedelivered']);
            }
        }

        if (array_key_exists('isRedelivered', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isRedelivered');

            if (null === $mockTimes['isRedelivered']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isRedelivered'])) {
                $mockMethod->times($mockTimes['isRedelivered']['times']);
            } else {
                $mockMethod->times($mockTimes['isRedelivered']);
            }
            $mockMethod->andReturn($mockArgs['isRedelivered']);
        }

        if (array_key_exists('setCorrelationId', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setCorrelationId');

            if (null === $mockTimes['setCorrelationId']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setCorrelationId'])) {
                $mockMethod->times($mockTimes['setCorrelationId']['times']);
            } else {
                $mockMethod->times($mockTimes['setCorrelationId']);
            }
        }

        if (array_key_exists('getCorrelationId', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getCorrelationId');

            if (null === $mockTimes['getCorrelationId']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getCorrelationId'])) {
                $mockMethod->times($mockTimes['getCorrelationId']['times']);
            } else {
                $mockMethod->times($mockTimes['getCorrelationId']);
            }
            $mockMethod->andReturn($mockArgs['getCorrelationId']);
        }

        if (array_key_exists('setMessageId', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setMessageId');

            if (null === $mockTimes['setMessageId']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setMessageId'])) {
                $mockMethod->times($mockTimes['setMessageId']['times']);
            } else {
                $mockMethod->times($mockTimes['setMessageId']);
            }
        }

        if (array_key_exists('getMessageId', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getMessageId');

            if (null === $mockTimes['getMessageId']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getMessageId'])) {
                $mockMethod->times($mockTimes['getMessageId']['times']);
            } else {
                $mockMethod->times($mockTimes['getMessageId']);
            }
            $mockMethod->andReturn($mockArgs['getMessageId']);
        }

        if (array_key_exists('getTimestamp', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getTimestamp');

            if (null === $mockTimes['getTimestamp']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getTimestamp'])) {
                $mockMethod->times($mockTimes['getTimestamp']['times']);
            } else {
                $mockMethod->times($mockTimes['getTimestamp']);
            }
            $mockMethod->andReturn($mockArgs['getTimestamp']);
        }

        if (array_key_exists('setTimestamp', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setTimestamp');

            if (null === $mockTimes['setTimestamp']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setTimestamp'])) {
                $mockMethod->times($mockTimes['setTimestamp']['times']);
            } else {
                $mockMethod->times($mockTimes['setTimestamp']);
            }
        }

        if (array_key_exists('setReplyTo', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setReplyTo');

            if (null === $mockTimes['setReplyTo']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setReplyTo'])) {
                $mockMethod->times($mockTimes['setReplyTo']['times']);
            } else {
                $mockMethod->times($mockTimes['setReplyTo']);
            }
        }

        if (array_key_exists('getReplyTo', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getReplyTo');

            if (null === $mockTimes['getReplyTo']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getReplyTo'])) {
                $mockMethod->times($mockTimes['getReplyTo']['times']);
            } else {
                $mockMethod->times($mockTimes['getReplyTo']);
            }
            $mockMethod->andReturn($mockArgs['getReplyTo']);
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Interop\Queue\Processor.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Processor
     */
    protected function createInteropQueueProcessorMock(
        array $mockArgs = ['process' => ''],
        array $mockTimes = ['process' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\Processor', Processor::class);

        if (array_key_exists('process', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('process');

            if (null === $mockTimes['process']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['process'])) {
                $mockMethod->times($mockTimes['process']['times']);
            } else {
                $mockMethod->times($mockTimes['process']);
            }
            $mockMethod->andReturn($mockArgs['process']);

            if (is_array($mockArgs['process']) && isset($mockArgs['process']['exception'])) {
                if (!is_array($mockArgs['process']['exception'])) {
                    $mockArgs['process']['exception'] = [$mockArgs['process']['exception'], 'process method exception'];
                }
                $mockMethod->andThrow($mockArgs['process']['exception'][0], $mockArgs['process']['exception'][1]);
            }
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Interop\Queue\Topic.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Topic
     */
    protected function createInteropQueueTopicMock(
        array $mockArgs = ['getTopicName' => ''],
        array $mockTimes = ['getTopicName' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\Topic', Topic::class);

        if (array_key_exists('getTopicName', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getTopicName');

            if (null === $mockTimes['getTopicName']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getTopicName'])) {
                $mockMethod->times($mockTimes['getTopicName']['times']);
            } else {
                $mockMethod->times($mockTimes['getTopicName']);
            }
            $mockMethod->andReturn($mockArgs['getTopicName']);
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Interop\Queue\Queue.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Queue
     */
    protected function createInteropQueueQueueMock(
        array $mockArgs = ['getQueueName' => ''],
        array $mockTimes = ['getQueueName' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\Queue', Queue::class);

        if (array_key_exists('getQueueName', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getQueueName');

            if (null === $mockTimes['getQueueName']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getQueueName'])) {
                $mockMethod->times($mockTimes['getQueueName']['times']);
            } else {
                $mockMethod->times($mockTimes['getQueueName']);
            }
            $mockMethod->andReturn($mockArgs['getQueueName']);
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Interop\Queue\Producer.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Producer
     */
    protected function createInteropQueueProducerMock(
        array $mockArgs = ['send' => '', 'setDeliveryDelay' => '', 'getDeliveryDelay' => '', 'setPriority' => '', 'getPriority' => '', 'setTimeToLive' => '', 'getTimeToLive' => ''],
        array $mockTimes = ['send' => 0, 'setDeliveryDelay' => 0, 'getDeliveryDelay' => 0, 'setPriority' => 0, 'getPriority' => 0, 'setTimeToLive' => 0, 'getTimeToLive' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\Producer', Producer::class);

        if (array_key_exists('send', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('send');

            if (null === $mockTimes['send']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['send'])) {
                $mockMethod->times($mockTimes['send']['times']);
            } else {
                $mockMethod->times($mockTimes['send']);
            }
        }

        if (array_key_exists('setDeliveryDelay', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setDeliveryDelay');

            if (null === $mockTimes['setDeliveryDelay']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setDeliveryDelay'])) {
                $mockMethod->times($mockTimes['setDeliveryDelay']['times']);
            } else {
                $mockMethod->times($mockTimes['setDeliveryDelay']);
            }
            $mockMethod->andReturnSelf();
        }

        if (array_key_exists('getDeliveryDelay', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getDeliveryDelay');

            if (null === $mockTimes['getDeliveryDelay']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getDeliveryDelay'])) {
                $mockMethod->times($mockTimes['getDeliveryDelay']['times']);
            } else {
                $mockMethod->times($mockTimes['getDeliveryDelay']);
            }
            $mockMethod->andReturn($mockArgs['getDeliveryDelay']);
        }

        if (array_key_exists('setPriority', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setPriority');

            if (null === $mockTimes['setPriority']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setPriority'])) {
                $mockMethod->times($mockTimes['setPriority']['times']);
            } else {
                $mockMethod->times($mockTimes['setPriority']);
            }
            $mockMethod->andReturnSelf();
        }

        if (array_key_exists('getPriority', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getPriority');

            if (null === $mockTimes['getPriority']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getPriority'])) {
                $mockMethod->times($mockTimes['getPriority']['times']);
            } else {
                $mockMethod->times($mockTimes['getPriority']);
            }
            $mockMethod->andReturn($mockArgs['getPriority']);
        }

        if (array_key_exists('setTimeToLive', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setTimeToLive');

            if (null === $mockTimes['setTimeToLive']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setTimeToLive'])) {
                $mockMethod->times($mockTimes['setTimeToLive']['times']);
            } else {
                $mockMethod->times($mockTimes['setTimeToLive']);
            }
            $mockMethod->andReturnSelf();
        }

        if (array_key_exists('getTimeToLive', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getTimeToLive');

            if (null === $mockTimes['getTimeToLive']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getTimeToLive'])) {
                $mockMethod->times($mockTimes['getTimeToLive']['times']);
            } else {
                $mockMethod->times($mockTimes['getTimeToLive']);
            }
            $mockMethod->andReturn($mockArgs['getTimeToLive']);
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Interop\Queue\Consumer.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Consumer
     */
    protected function createInteropQueueConsumerMock(
        array $mockArgs = ['getQueue' => '', 'receive' => '', 'receiveNoWait' => '', 'acknowledge' => '', 'reject' => ''],
        array $mockTimes = ['getQueue' => 0, 'receive' => 0, 'receiveNoWait' => 0, 'acknowledge' => 0, 'reject' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\Consumer', Consumer::class);

        if (array_key_exists('getQueue', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getQueue');

            if (null === $mockTimes['getQueue']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getQueue'])) {
                $mockMethod->times($mockTimes['getQueue']['times']);
            } else {
                $mockMethod->times($mockTimes['getQueue']);
            }

            $interopQueueQueueMock = $this->createInteropQueueQueueMock($mockArgs['getQueue'], $mockTimes['getQueue']);
            $mockMethod->andReturn($interopQueueQueueMock);
        }

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

        if (array_key_exists('acknowledge', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('acknowledge');

            if (null === $mockTimes['acknowledge']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['acknowledge'])) {
                $mockMethod->times($mockTimes['acknowledge']['times']);
            } else {
                $mockMethod->times($mockTimes['acknowledge']);
            }
        }

        if (array_key_exists('reject', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('reject');

            if (null === $mockTimes['reject']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['reject'])) {
                $mockMethod->times($mockTimes['reject']['times']);
            } else {
                $mockMethod->times($mockTimes['reject']);
            }
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Interop\Queue\SubscriptionConsumer.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|SubscriptionConsumer
     */
    protected function createInteropQueueSubscriptionConsumerMock(
        array $mockArgs = ['consume' => '', 'subscribe' => '', 'unsubscribe' => '', 'unsubscribeAll' => ''],
        array $mockTimes = ['consume' => 0, 'subscribe' => 0, 'unsubscribe' => 0, 'unsubscribeAll' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\SubscriptionConsumer', SubscriptionConsumer::class);

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
        }

        if (array_key_exists('subscribe', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('subscribe');

            if (null === $mockTimes['subscribe']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['subscribe'])) {
                $mockMethod->times($mockTimes['subscribe']['times']);
            } else {
                $mockMethod->times($mockTimes['subscribe']);
            }
        }

        if (array_key_exists('unsubscribe', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('unsubscribe');

            if (null === $mockTimes['unsubscribe']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['unsubscribe'])) {
                $mockMethod->times($mockTimes['unsubscribe']['times']);
            } else {
                $mockMethod->times($mockTimes['unsubscribe']);
            }
        }

        if (array_key_exists('unsubscribeAll', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('unsubscribeAll');

            if (null === $mockTimes['unsubscribeAll']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['unsubscribeAll'])) {
                $mockMethod->times($mockTimes['unsubscribeAll']['times']);
            } else {
                $mockMethod->times($mockTimes['unsubscribeAll']);
            }
        }

        return $mock;
    }

    /**
     * Create and return mock object for class Interop\Queue\Context.
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return MockInterface|Context
     */
    protected function createInteropQueueContextMock(
        array $mockArgs = ['createMessage' => '', 'createTopic' => '', 'createQueue' => '', 'createTemporaryQueue' => '', 'createProducer' => '', 'createConsumer' => '', 'createSubscriptionConsumer' => '', 'purgeQueue' => '', 'close' => ''],
        array $mockTimes = ['createMessage' => 0, 'createTopic' => 0, 'createQueue' => 0, 'createTemporaryQueue' => 0, 'createProducer' => 0, 'createConsumer' => 0, 'createSubscriptionConsumer' => 0, 'purgeQueue' => 0, 'close' => 0]
    ): MockInterface {
        $mock = Mockery::namedMock('Mock\Interop\Queue\Context', Context::class);

        if (array_key_exists('createMessage', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('createMessage');

            if (null === $mockTimes['createMessage']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['createMessage'])) {
                $mockMethod->times($mockTimes['createMessage']['times']);
            } else {
                $mockMethod->times($mockTimes['createMessage']);
            }

            $interopQueueMessageMock = $this->createInteropQueueMessageMock($mockArgs['createMessage'], $mockTimes['createMessage']);
            $mockMethod->andReturn($interopQueueMessageMock);
        }

        if (array_key_exists('createTopic', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('createTopic');

            if (null === $mockTimes['createTopic']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['createTopic'])) {
                $mockMethod->times($mockTimes['createTopic']['times']);
            } else {
                $mockMethod->times($mockTimes['createTopic']);
            }

            $interopQueueTopicMock = $this->createInteropQueueTopicMock($mockArgs['createTopic'], $mockTimes['createTopic']);
            $mockMethod->andReturn($interopQueueTopicMock);
        }

        if (array_key_exists('createQueue', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('createQueue');

            if (null === $mockTimes['createQueue']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['createQueue'])) {
                $mockMethod->times($mockTimes['createQueue']['times']);
            } else {
                $mockMethod->times($mockTimes['createQueue']);
            }

            $interopQueueQueueMock = $this->createInteropQueueQueueMock($mockArgs['createQueue'], $mockTimes['createQueue']);
            $mockMethod->andReturn($interopQueueQueueMock);
        }

        if (array_key_exists('createTemporaryQueue', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('createTemporaryQueue');

            if (null === $mockTimes['createTemporaryQueue']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['createTemporaryQueue'])) {
                $mockMethod->times($mockTimes['createTemporaryQueue']['times']);
            } else {
                $mockMethod->times($mockTimes['createTemporaryQueue']);
            }

            $interopQueueQueueMock = $this->createInteropQueueQueueMock($mockArgs['createTemporaryQueue'], $mockTimes['createTemporaryQueue']);
            $mockMethod->andReturn($interopQueueQueueMock);
        }

        if (array_key_exists('createProducer', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('createProducer');

            if (null === $mockTimes['createProducer']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['createProducer'])) {
                $mockMethod->times($mockTimes['createProducer']['times']);
            } else {
                $mockMethod->times($mockTimes['createProducer']);
            }

            $interopQueueProducerMock = $this->createInteropQueueProducerMock($mockArgs['createProducer'], $mockTimes['createProducer']);
            $mockMethod->andReturn($interopQueueProducerMock);
        }

        if (array_key_exists('createConsumer', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('createConsumer');

            if (null === $mockTimes['createConsumer']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['createConsumer'])) {
                $mockMethod->times($mockTimes['createConsumer']['times']);
            } else {
                $mockMethod->times($mockTimes['createConsumer']);
            }

            $interopQueueConsumerMock = $this->createInteropQueueConsumerMock($mockArgs['createConsumer'], $mockTimes['createConsumer']);
            $mockMethod->andReturn($interopQueueConsumerMock);
        }

        if (array_key_exists('createSubscriptionConsumer', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('createSubscriptionConsumer');

            if (null === $mockTimes['createSubscriptionConsumer']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['createSubscriptionConsumer'])) {
                $mockMethod->times($mockTimes['createSubscriptionConsumer']['times']);
            } else {
                $mockMethod->times($mockTimes['createSubscriptionConsumer']);
            }

            $interopQueueSubscriptionConsumerMock = $this->createInteropQueueSubscriptionConsumerMock($mockArgs['createSubscriptionConsumer'], $mockTimes['createSubscriptionConsumer']);
            $mockMethod->andReturn($interopQueueSubscriptionConsumerMock);
        }

        if (array_key_exists('purgeQueue', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('purgeQueue');

            if (null === $mockTimes['purgeQueue']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['purgeQueue'])) {
                $mockMethod->times($mockTimes['purgeQueue']['times']);
            } else {
                $mockMethod->times($mockTimes['purgeQueue']);
            }
        }

        if (array_key_exists('close', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('close');

            if (null === $mockTimes['close']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['close'])) {
                $mockMethod->times($mockTimes['close']['times']);
            } else {
                $mockMethod->times($mockTimes['close']);
            }
        }

        return $mock;
    }
}
