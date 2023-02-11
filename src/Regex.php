<?php

namespace xywf221\BSON;

use JsonSerializable;
use Serializable;
use Stringable;

final class Regex implements Serializable, Type, JsonSerializable, Stringable, RegexInterface
{

    final public function __construct(string $pattern, string $flags = '')
    {
    }


    final public function getPattern(): string
    {
        /**
         * @see \MongoDB\BSON\RegexInterface::getPattern()
         */

        $rt = "";
        return $rt;
    }


    final public function getFlags(): string
    {
        /**
         * @see \MongoDB\BSON\RegexInterface::getFlags()
         */

        $rt = "";
        return $rt;
    }


    final public function __toString(): string
    {
        /**
         * @see \Stringable::__toString()
         */

        return '';
    }


    final public static function __set_state(array $properties): \MongoDB\BSON\Regex
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
