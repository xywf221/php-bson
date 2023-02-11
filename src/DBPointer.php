<?php

namespace xywf221\BSON;

use JsonSerializable;
use Stringable;
use Serializable;

final class DBPointer implements Serializable, JsonSerializable, Type, Stringable
{

    final private function __construct()
    {
    }


    final public function __toString(): string
    {
        /**
         * @see \Stringable::__toString()
         */

        return '';
    }


    final public function serialize(): string
    {
        /**
         * @see Serializable::serialize
         */

        $rt = "";
        return $rt;
    }


    final public function unserialize($serialized): void
    {
        /**
         * @see Serializable::unserialize
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
