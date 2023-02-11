<?php

namespace xywf221\BSON\Internal\serializer {

    use xywf221\BSON\Binary;
    use xywf221\BSON\BinaryInterface;
    use xywf221\BSON\Decimal128;
    use xywf221\BSON\Decimal128Interface;
    use xywf221\BSON\Exception\UnexpectedValueException;
    use xywf221\BSON\Internal\Common\Constants;
    use xywf221\BSON\Internal\Common\Uint8Array;
    use xywf221\BSON\ObjectId;
    use xywf221\BSON\ObjectIdInterface;
    use xywf221\BSON\Persistable;
    use xywf221\BSON\Serializable;
    use xywf221\BSON\Type;


    function serializeString(Uint8Array $buffer, string $key, string $value, int $index): int
    {
        // Encode String type
        $buffer[$index++] = Constants::BSON_DATA_STRING;
        // write key
        $numberOfWrittenBytes = $buffer->encodeUTF8Into($key, $index);
        // Encode the name
        $index += $numberOfWrittenBytes + 1;
        $buffer[$index - 1] = 0;
        // Write the string
        $size = $buffer->encodeUTF8Into($value, $index + 4);
        // Write the size of the string to buffer
        $buffer[$index + 3] = (($size + 1) >> 24) & 0xff;
        $buffer[$index + 2] = (($size + 1) >> 16) & 0xff;
        $buffer[$index + 1] = (($size + 1) >> 8) & 0xff;
        $buffer[$index] = ($size + 1) & 0xff;
        // Update index
        $index += 4 + $size;
        // Write zero
        $buffer[$index++] = 0;
        return $index;
    }


    function serializeNumber(Uint8Array $buffer, string $key, int|float $value, int $index): int
    {
        $type = is_float($value) ? Constants::BSON_DATA_NUMBER : Constants::BSON_DATA_INT;
        $buffer[$index++] = $type;
        $numberOfWrittenBytes = $buffer->encodeUTF8Into($key, $index);
        $index += $numberOfWrittenBytes;
        $buffer[$index++] = 0x00;
        if ($type === Constants::BSON_DATA_INT) {
            $buffer->writeUint32LE($value, $index);
            $index += 4;
        } else {
            $buffer->writeFloat64($value, $index);
            $index += 8;
        }
        return $index;
    }


    function serializeBoolean(Uint8Array $buffer, string $key, bool $value, int $index): int
    {
        $buffer[$index++] = Constants::BSON_DATA_BOOLEAN;
        $numberOfWrittenBytes = $buffer->encodeUTF8Into($key, $index);
        $index += $numberOfWrittenBytes;
        $buffer[$index++] = 0;
        $buffer[$index++] = $value ? 1 : 0;
        return $index;
    }

    function serializeNull(Uint8Array $buffer, string $key, int $index): int
    {
        $buffer[$index++] = Constants::BSON_DATA_NULL;
        $numberOfWrittenBytes = $buffer->encodeUTF8Into($key, $index);
        $index += $numberOfWrittenBytes;
        $buffer[$index++] = 0;
        return $index;
    }

    function serializeObject(Uint8Array $buffer, string $key, object|array $value, int $index): int
    {
        //检查如果对象是array并且是list 那就当成数组来序列
        $buffer[$index++] = is_array($value) && array_is_list($value) ? Constants::BSON_DATA_ARRAY : Constants::BSON_DATA_OBJECT;
        $index += $buffer->encodeUTF8Into($key, $index);
        $buffer[$index++] = 0;
        $endIndex = serializeInto($buffer, $value, $index);
        // delete
        return $endIndex;
    }

    //function serializeObjectId(buffer: Uint8Array, key: string, value: ObjectId, index: number) {
    //  // Write the type
    //  buffer[index++] = constants.BSON_DATA_OID;
    //  // Number of written bytes
    //  const numberOfWrittenBytes = ByteUtils.encodeUTF8Into(buffer, key, index);
    //
    //  // Encode the name
    //  index = index + numberOfWrittenBytes;
    //  buffer[index++] = 0;
    //
    //  // Write the objectId into the shared buffer
    //  if (isUint8Array(value.id)) {
    //    buffer.set(value.id.subarray(0, 12), index);
    //  } else {
    //    throw new BSONError('object [' + JSON.stringify(value) + '] is not a valid ObjectId');
    //  }
    //
    //  // Adjust index
    //  return index + 12;
    //}


    function serializeObjectId(Uint8Array $buffer, string $key, ObjectId $value, int $index): int
    {
        $buffer[$index++] = Constants::BSON_DATA_OID;
        $index += $buffer->encodeUTF8Into($key, $index);
        $buffer[$index++] = 0;

        $buffer->stringInto($value->uint8Array->toString(), $index);
        return $index + 12;
    }


    function serializeBinary(Uint8Array $buffer, string $key, Binary $value, int $index): int
    {
        $buffer[$index++] = Constants::BSON_DATA_BINARY;
        $index += $buffer->encodeUTF8Into($key, $index);
        $buffer[$index++] = 0;

        $data = $value->getData();
        $size = strlen($data);
        $type = $value->getType();
        if ($type === Binary::TYPE_OLD_BINARY) $size += 4;

        $buffer->writeUint32LE($size, $index);
        $index += 4;
        // Write the subtype to the buffer
        $buffer[$index++] = $type;

        // If we have binary type 2 the 4 first bytes are the size
        if ($type === Binary::TYPE_OLD_BINARY) {
            $size -= 4;
            $buffer->writeUint32LE($size, $index);
            $index += 4;
        }
        $buffer->stringInto($data, $index);
        return $index + $size;
    }


    function serializeDecimal128(Uint8Array $buffer, string $key, Decimal128 $value, int $index): int
    {
        $buffer[$index++] = Constants::BSON_DATA_DECIMAL128;
        $index += $buffer->encodeUTF8Into($key, $index);
        $buffer[$index++] = 0;
        // Write the data from the value
//        buffer.set(value.bytes.subarray(0, 16), index);
        return $index + 16;
    }


    /**
     * @throws UnexpectedValueException
     */
    function serializeInto(Uint8Array $buffer, mixed $value, int $startingIndex): int
    {
        // https://www.php.net/manual/zh/mongodb.persistence.serialization.php
        $index = $startingIndex + 4;
        if (is_object($value) || is_array($value)) {

            $vars = is_array($value) ? $value : get_object_vars($value);

            foreach ($vars as $k => $v) {
                $type = gettype($v);
                switch ($type) {
                    case 'boolean':
                        $index = serializeBoolean($buffer, $k, $v, $index);
                        break;
                    case 'string':
                        $index = serializeString($buffer, $k, $v, $index);
                        break;
                    case 'integer':
                    case 'double':
                        $index = serializeNumber($buffer, $k, $v, $index);
                        break;
                    case 'NULL':
                        $index = serializeNull($buffer, $k, $index);
                        break;
                    case 'array':
                        $index = serializeObject($buffer, $k, $v, $index);
                        break;
                    case 'object':
                        if ($v instanceof Type) {
                            // 特定的序列化
                            $index = match (true) {
                                $v instanceof ObjectIdInterface => serializeObjectId($buffer, $k, $v, $index),
                                $v instanceof BinaryInterface => serializeBinary($buffer, $k, $v, $index),
                                $v instanceof Decimal128Interface => serializeDecimal128($buffer, $k, $v, $index),
                                // 处理 __pclass
                                $v instanceof Persistable => 1,
                                // 处理 Serializable
                                $v instanceof Serializable => 2,
                                default => throw new UnexpectedValueException()
                            };
                        } else {
                            // stdClass or other object
                            $index = serializeObject($buffer, $k, $v, $index);
                        }
                        break;
                }
            }

        } else {

        }

        $buffer[$index++] = 0x00;
        $size = $index - $startingIndex;
        $buffer->writeUint32LE($size, $startingIndex);
        return $index;
    }

}
