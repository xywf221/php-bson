<?php

namespace xywf221\BSON\Internal\Common;


use ArrayAccess;

class Uint8Array implements ArrayAccess
{
    private string $str;

    public function __construct(int|string $value)
    {
        $this->str = match (gettype($value)) {
            'integer' => str_repeat("\x00", $value),
            'string' => $value
        };
    }

    public function length(): int
    {
        return strlen($this->str);
    }

    public function offsetExists($offset): bool
    {
        $length = strlen($this->str);
        return $offset >= 0 && $offset < $length;
    }

    public function offsetGet($offset): int
    {
        return ord($this->str[$offset]);
    }

    /**
     * @param int $offset
     * @param int $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->str[$offset] = chr($value);
    }

    public function offsetUnset($offset): void
    {
        // 用 0 填充
        $this->offsetSet($offset, 0);
    }

    public function __toString(): string
    {
        return $this->str;
    }

    public function toString(): string
    {
        return $this->str;
    }

    public function encodeUTF8Into(string $value, int $offset): int
    {
        // todo utf8 transform
        $len = strlen($value);
        for ($pos = 0; $pos < $len; $pos++) {
            $this->str[$offset + $pos] = $value[$pos];
        }
        return $len;
    }

    public function stringInto(string $value, int $offset): int
    {
        $len = strlen($value);
        for ($pos = 0; $pos < $len; $pos++) {
            $this->str[$offset + $pos] = $value[$pos];
        }
        return $len;
    }

    public function toArray(): array
    {
        return unpack("C*", $this->str);
    }


    public function writeUint32LE(int $value, int $offset = 0)
    {
        $this->offsetSet($offset, $value & 0xff);
        $this->offsetSet($offset + 1, ($value >> 8) & 0xff);
        $this->offsetSet($offset + 2, ($value >> 16) & 0xff);
        $this->offsetSet($offset + 3, ($value >> 24) & 0xff);
    }


    public function writeUint32BE(int $value, int $offset = 0)
    {
        $this->offsetSet($offset + 3, $value & 0xff);
        $this->offsetSet($offset + 2, ($value >> 8) & 0xff);
        $this->offsetSet($offset + 1, ($value >> 16) & 0xff);
        $this->offsetSet($offset, ($value >> 24) & 0xff);
    }


    public function getUint32BE(int $offset = 0): int
    {
        // uint32(b[3]) | uint32(b[2])<<8 | uint32(b[1])<<16 | uint32(b[0])<<24
        return $this->offsetGet($offset + 3) | $this->offsetGet($offset + 2) << 8 | $this->offsetGet($offset + 1) << 16 | $this->offsetGet($offset) << 24;
    }

    public function writeFloat64(float $value, int $offset = 0)
    {
        $binary = pack('e', $value);
        $this->str[$offset] = $binary[0];
        $this->str[$offset + 1] = $binary[1];
        $this->str[$offset + 2] = $binary[2];
        $this->str[$offset + 3] = $binary[3];
        $this->str[$offset + 4] = $binary[4];
        $this->str[$offset + 5] = $binary[5];
        $this->str[$offset + 6] = $binary[6];
        $this->str[$offset + 7] = $binary[7];
    }

    public function subarray(int $begin, int $end): string
    {
        return substr($this->str, $begin, $end - $begin);
    }
}
