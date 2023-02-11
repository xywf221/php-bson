<?php

require_once '../vendor/autoload.php';

$objID = new MongoDB\BSON\ObjectId('63e725d3be0e5f9337333f19');
$newObjID = new xywf221\BSON\ObjectId('63e725d3be0e5f9337333f19');
var_dump(serialize($objID));

var_dump(serialize($newObjID));

var_dump(unserialize('O:21:"MongoDB\BSON\ObjectId":1:{s:3:"oid";s:24:"63e725d3be0e5f9337333f19";}'));
var_dump(unserialize('O:21:"xywf221\BSON\ObjectId":1:{s:3:"oid";s:24:"63e725d3be0e5f9337333f19";}'));