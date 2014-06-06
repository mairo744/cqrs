<?php

namespace CQRS\Plugin\Zend\Options;

use Zend\Stdlib\AbstractOptions;

class EventPublisher extends AbstractOptions
{
    /** @var string */
    protected $class = 'CQRS\EventHandling\SimpleEventPublisher';

    /** @var string */
    protected $eventBus = 'cqrs_default';

    /** @var string */
    protected $ormEntityManager = 'orm_default';

    /**
     * @param string $class
     * @return self
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $eventBus
     * @return self
     */
    public function setEventBus($eventBus)
    {
        $this->eventBus = $eventBus;
        return $this;
    }

    /**
     * @return string
     */
    public function getEventBus()
    {
        return "cqrs.eventBus.{$this->eventBus}";
    }

    /**
     * @param string $ormEntityManager
     * @return self
     */
    public function setOrmEntityManager($ormEntityManager)
    {
        $this->ormEntityManager = $ormEntityManager;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrmEntityManager()
    {
        return "doctrine.entitymanager.{$this->ormEntityManager}";
    }
}
