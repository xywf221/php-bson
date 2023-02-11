<?php

namespace xywf221\BSON;

use Stringable;

interface TimestampInterface extends Stringable
{

    function getTimestamp();


    function getIncrement();


    function __toString(): string;
}