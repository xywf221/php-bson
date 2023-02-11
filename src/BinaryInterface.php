<?php

namespace xywf221\BSON;

use Stringable;

interface BinaryInterface extends Stringable
{

    function getData();


    function getType();


    function __toString() : string ;
}