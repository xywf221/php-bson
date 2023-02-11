<?php
require_once __DIR__ . '/../vendor/autoload.php';

$binary = new MongoDB\BSON\Binary('foo', MongoDB\BSON\Binary::TYPE_GENERIC);


$newBinary = new xywf221\BSON\Binary('foo', xywf221\BSON\Binary::TYPE_GENERIC);


assert($binary->__serialize() == $newBinary->__serialize());
assert($binary->serialize() == $newBinary->serialize());


$binary->unserialize('a:2:{s:4:"data";s:3:"goo";s:4:"type";i:0;}');
$newBinary->unserialize('a:2:{s:4:"data";s:3:"goo";s:4:"type";i:0;}');

assert($binary->getData() == $newBinary->getData());

assert(serialize($binary) == str_replace('xywf221', 'MongoDB', serialize($newBinary)));

assert(json_encode($binary) == json_encode($newBinary));


$binary = new MongoDB\BSON\Binary("\x0f\x0d", MongoDB\BSON\Binary::TYPE_GENERIC);
$newBinary = new xywf221\BSON\Binary("\x0f\x0d", xywf221\BSON\Binary::TYPE_GENERIC);

assert(bin2hex($binary) == bin2hex($newBinary));


$bson = MongoDB\BSON\fromPHP(['abc' => $binary]);
$newBson = xywf221\BSON\fromPHP(['abc' => $newBinary]);
assert(bin2hex($bson) == bin2hex($newBson));
// todo more bson serialize test case
