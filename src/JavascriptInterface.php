<?php

namespace xywf221\BSON;

use Stringable;

interface JavascriptInterface extends Stringable
{

    function getCode();


    function getScope();


    function __toString(): string;
}