<?php

namespace xywf221\BSON;

interface Unserializable
{

    function bsonUnserialize(array $data);
}