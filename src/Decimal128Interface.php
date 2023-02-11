<?php

namespace xywf221\BSON;

use Stringable;

interface Decimal128Interface extends Stringable
{

    function __toString(): string;
}