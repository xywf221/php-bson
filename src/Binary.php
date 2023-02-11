<?php

namespace xywf221\BSON;

use InvalidArgumentException;
use JsonSerializable;
use Stringable;
use Serializable;

final class Binary implements Serializable, Type, JsonSerializable, Stringable, BinaryInterface
{

    public const TYPE_GENERIC = 0;


    public const TYPE_FUNCTION = 1;


    public const TYPE_OLD_BINARY = 2;


    public const TYPE_OLD_UUID = 3;


    public const TYPE_UUID = 4;


    public const TYPE_MD5 = 5;


    public const TYPE_ENCRYPTED = 6;


    public const TYPE_COLUMN = 7;


    public const TYPE_USER_DEFINED = 128;


    private string $data;

    private int $type;

    final public function __construct(string $data, int $type = Binary::TYPE_GENERIC)
    {
        if ($type < 0 || $type > 255) {
            throw new InvalidArgumentException('type is not an unsigned 8-bit integer');
        }

        if (($type == Binary::TYPE_OLD_UUID || $type == Binary::TYPE_UUID) && strlen($data) !== 16) {
            throw new InvalidArgumentException('uuid data is not exactly 16 bytes in length');
        }

        $this->data = $data;
        $this->type = $type;
    }


    final public function getData(): string
    {
        return $this->data;
    }


    final public function getType(): int
    {
        return $this->type;
    }


    final public function __toString(): string
    {
        return $this->data;
    }


    final public function serialize(): string
    {
        return serialize($this->__serialize());
    }


    final public function unserialize($data): void
    {
        $this->__unserialize(unserialize($data));
    }


    final public function __unserialize(array $data): void
    {
        list('data' => $this->data, 'type' => $this->type) = $data;
    }


    final public function __serialize(): array
    {
        return ['data' => $this->data, 'type' => $this->type];
    }


    final public function jsonSerialize(): array
    {
        return ['$binary' => base64_encode($this->data), '$type' => sprintf('%02d', $this->type)];
    }

    final public function __debugInfo(): ?array
    {
        return $this->__serialize();
    }
}
