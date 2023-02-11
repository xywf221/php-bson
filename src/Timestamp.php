<?php

namespace xywf221\BSON;

use JsonSerializable;
use Serializable;
use Stringable;

final class Timestamp implements Serializable, Type, JsonSerializable, Stringable, TimestampInterface
{

    final public function __construct(string|int $increment, string|int $timestamp)
    {
    }


    final public function getTimestamp(): int
    {
        /**
         * @see \MongoDB\BSON\TimestampInterface::getTimestamp()
         */

        $rt = 1;
        return $rt;
    }


    final public function getIncrement(): int
    {
        /**
         * @see \MongoDB\BSON\TimestampInterface::getIncrement()
         */

        $rt = 1;
        return $rt;
    }


    final public function __toString(): string
    {
        /**
         * @see \Stringable::__toString()
         */

        return '';
    }


    final public static function __set_state(array $properties): \MongoDB\BSON\Timestamp
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
