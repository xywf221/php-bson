<?php

namespace xywf221\BSON;

interface Serializable extends Type
{

    function bsonSerialize();
}