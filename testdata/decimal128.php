<?php
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * @var array<MongoDB\BSON\Decimal128> $arr
 */
$arr = [
    new MongoDB\BSON\Decimal128(1234.5678),
    new MongoDB\BSON\Decimal128(NAN),
    new MongoDB\BSON\Decimal128(INF),
    new MongoDB\BSON\Decimal128(1e50),
    new MongoDB\BSON\Decimal128(str_repeat('1',32))
];

$arr2 = [
    new xywf221\BSON\Decimal128(1234.5678),
    new xywf221\BSON\Decimal128(NAN),
    new xywf221\BSON\Decimal128(INF),
    new xywf221\BSON\Decimal128(1e50),
];

//foreach ($arr as $key => $value) {
//    var_dump(json_encode($value));
//}