<?php

namespace xywf221\BSON;

use Stringable;

interface ObjectIdInterface extends Stringable
{
    function getTimestamp();

    function __toString(): string;
}