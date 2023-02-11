<?php

namespace xywf221\BSON;

use JsonSerializable;
use Stringable;
use Serializable;

final class Javascript implements Serializable, Type, JsonSerializable, Stringable, JavascriptInterface
{

    final public function __construct(string $code, object|array|null $scope = NULL)
    {
    }


    final public static function __set_state(array $properties): \MongoDB\BSON\Javascript
    {

        $rt = null;
        return $rt;
    }


    final public function getCode(): string
    {
        /**
         * @see \MongoDB\BSON\JavascriptInterface::getCode()
         */

        $rt = "";
        return $rt;
    }


    final public function getScope(): ?object
    {
        /**
         * @see \MongoDB\BSON\JavascriptInterface::getScope()
         */

        $rt = null;
        return $rt;
    }


    final public function __toString(): string
    {
        /**
         * @see Stringable::__toString
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
         * @see JsonSerializable::jsonSerialize
         */

        $rt = null;
        return $rt;
    }
}
