<?php

namespace CQRS\EventHandling;

use CQRS\Domain\Message\EventMessageInterface;

interface EventBusInterface
{
    /**
     * @param EventMessageInterface $event
     */
    public function publish(EventMessageInterface $event);
}
