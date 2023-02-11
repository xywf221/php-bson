<?php

namespace xywf221\BSON;

use Exception;
use InvalidArgumentException;
use JsonSerializable;
use Serializable;
use Stringable;
use xywf221\BSON\Internal\Common\Uint8Array;


define('BSON_ObjectID_Index', (int)floor(lcg_value() * 0xffffff));

final class ObjectId implements Serializable, Type, JsonSerializable, Stringable, ObjectIdInterface
{
    private static int $index = BSON_ObjectID_Index;

    private static ?string $PROCESS_UNIQUE = null;


    public Uint8Array $uint8Array;

    private string $oid;

    /**
     * @throws Exception
     */
    final public function __construct(?string $id = NULL)
    {
        if ($id == null) {
            $this->uint8Array = self::generate();
            $this->oid = bin2hex($this->uint8Array->toString());
        } else {
            // id is must hex string
            if (strlen($id) !== 24) {
                throw new InvalidArgumentException("Error parsing ObjectId string: $id");
            }
            $this->uint8Array = new Uint8Array(hex2bin($id));
            $this->oid = $id;
        }
    }


    final public function getTimestamp(): int
    {
        return $this->uint8Array->getUint32BE();
    }


    final public function __toString(): string
    {
        return $this->oid;
    }


    final public function serialize(): string
    {
        return serialize($this->__serialize());
    }


    /**
     * @throws Exception
     */
    final public function unserialize(string $data): void
    {
        $this->__unserialize(unserialize($data));
    }


    /**
     * @throws Exception
     */
    final public function __unserialize(array $data): void
    {
        $this->__construct($data['oid']);
    }


    final public function __serialize(): array
    {
        return ['oid' => $this->oid];
    }


    final public function jsonSerialize(): array
    {
        return ['$oid' => $this->oid];
    }

    private static function getInc(): int
    {
        return (self::$index = (self::$index + 1) % 0xffffff);
    }

    /**
     * @throws Exception
     */
    private static function generate(): Uint8Array
    {
        $time = time();
        $inc = self::getInc();
        $buffer = new Uint8Array(12);
        // 4-byte timestamp
        $buffer->writeUint32BE($time);
        if (self::$PROCESS_UNIQUE == null) {
            self::$PROCESS_UNIQUE = random_bytes(5);
        }
        // 5-byte process unique
        $buffer->stringInto(self::$PROCESS_UNIQUE, 4);
        // 3-byte counter
        $buffer[11] = $inc & 0xff;
        $buffer[10] = ($inc >> 8) & 0xff;
        $buffer[9] = ($inc >> 16) & 0xff;
        return $buffer;
    }

    final public function __debugInfo(): ?array
    {
        return $this->__serialize();
    }
}
