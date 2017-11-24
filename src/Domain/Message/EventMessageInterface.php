<?php
declare(strict_types=1);

namespace CQRS\Domain\Message;

use Pauci\DateTime\DateTimeInterface;

interface EventMessageInterface extends MessageInterface
{
    /**
     * @return DateTimeInterface
     */
    public function getTimestamp(): DateTimeInterface;
}
