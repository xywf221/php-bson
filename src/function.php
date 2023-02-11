<?php


namespace xywf221\BSON {

    use xywf221\BSON\Exception\UnexpectedValueException;
    use xywf221\BSON\Internal\Common\Uint8Array;
    use function xywf221\BSON\Internal\serializer\serializeInto;

    const MAXSIZE = 1024 * 1024 * 17;

    $GLOBALS['BSON_BUFFER'] = new Uint8Array(MAXSIZE);

    /**
     * @throws UnexpectedValueException
     */
    function fromPHP($value): string
    {
        $buffer = $GLOBALS['BSON_BUFFER'];
        $serializationIndex = serializeInto($buffer, $value, 0);
        return $buffer->subarray(0, $serializationIndex);
    }

    function fromJSON()
    {
        // TODO
    }

    function toCanonicalExtendedJSON()
    {
        // TODO
    }

    function toJSON()
    {
        // TODO
    }

    function toPHP()
    {
        // TODO
    }

    function toRelaxedExtendedJSON()
    {
        // TODO
    }

}