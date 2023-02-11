<?php

namespace xywf221\BSON;

use DateTime;
use DateTimeInterface;
use JsonSerializable;
use Serializable;
use Stringable;

final class UTCDateTime implements Serializable, Type, JsonSerializable, Stringable, UTCDateTimeInterface
{

    final public function __construct(DateTimeInterface|string|int|float|null $milliseconds = NULL)
    {
    }


    final public function toDateTime(): DateTime
    {
        /**
         * @see UTCDateTimeInterface::toDateTime()
         */

        $rt = null;
        return $rt;
    }


    final public function __toString(): string
    {
        /**
         * @see \Stringable::__toString()
         */

        return '';
    }


    final public static function __set_state(array $properties): UTCDateTime
    {

        $rt = null;
        return $rt;
    }


    final public function serialize(): string
    {
        /**
         * @see \Serializable::serialize()
         */

        $rt = "";
        return $rt;
    }


    final public function unserialize($serialized): void
    {
        /**
         * @see \Serializable::unserialize()
         */
    }


    final public function __unserialize(array $data): void
    {
    }


    final public function __serialize(): array
    {

        $rt = [];
        return $rt;
    }


    final public function jsonSerialize(): mixed
    {
        /**
         * @see \JsonSerializable::jsonSerialize()
         */

        $rt = null;
        return $rt;
    }
}