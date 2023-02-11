<?php

namespace xywf221\BSON;

use JsonSerializable;
use Serializable;

final class MinKey implements Serializable, JsonSerializable, Type, MinKeyInterface
{

    final public static function __set_state(array $properties) : \MongoDB\BSON\MinKey
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
