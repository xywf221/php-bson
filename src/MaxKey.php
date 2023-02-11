<?php

namespace xywf221\BSON;

use JsonSerializable;
use Serializable;

final class MaxKey implements Serializable, JsonSerializable, Type, MaxKeyInterface
{

    final public static function __set_state(array $properties) : \MongoDB\BSON\MaxKey
    {

        $rt = null;
        return $rt;
    }


    final public function serialize() : string
    {
        /**
         * @see \Serializable::serialize()
         */

        $rt = "";
        return $rt;
    }


    final public function unserialize($serialized) : void
    {
        /**
         * @see \Serializable::unserialize()
         */
    }


    final public function __unserialize(array $data) : void
    {
    }


    final public function __serialize() : array
    {

        $rt = [];
        return $rt;
    }


    final public function jsonSerialize() : mixed
    {
        /**
         * @see \JsonSerializable::jsonSerialize()
         */

        $rt = null;
        return $rt;
    }
}
