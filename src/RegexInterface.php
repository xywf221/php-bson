<?php

namespace xywf221\BSON;

use Stringable;

interface RegexInterface extends Stringable
{

    function getPattern();


    function getFlags();


    function __toString(): string;
}