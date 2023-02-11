<?php

namespace xywf221\BSON;

use Stringable;

interface UTCDateTimeInterface extends Stringable
{

    function toDateTime();


    function __toString(): string;
}