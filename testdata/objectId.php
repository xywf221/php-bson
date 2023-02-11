<?php

require_once __DIR__ . '/../vendor/autoload.php';

$objID = new MongoDB\BSON\ObjectId('63e725d3be0e5f9337333f19');
$newObjID = new xywf221\BSON\ObjectId('63e725d3be0e5f9337333f19');

var_dump(bin2hex(MongoDB\BSON\fromPHP(['obj' => $objID])));
var_dump(bin2hex(xywf221\BSON\fromPHP(['obj' => $newObjID])));
