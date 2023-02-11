<?php
require_once __DIR__ . '/../vendor/autoload.php';

$objID = new MongoDB\BSON\ObjectId('63e725d3be0e5f9337333f19');
$newObjID = new xywf221\BSON\ObjectId('63e725d3be0e5f9337333f19');


echo '[CHECK] ObjectId JSON Serialize' . PHP_EOL;
assert(json_encode($objID) == json_encode($newObjID));