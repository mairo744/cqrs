<?php

namespace CQRSTest\EventHandling;

use CQRS\EventHandling\DomainEvent;
use CQRS\EventHandling\EventName;

class EventNameTest extends \PHPUnit_Framework_TestCase
{
    public function testEventNameToString()
    {
        $event = new EventNameTestEvent();
        $eventName = new EventName($event);

        $this->assertEquals('EventNameTest', $eventName);
    }
}

class EventNameTestEvent implements DomainEvent
{}
