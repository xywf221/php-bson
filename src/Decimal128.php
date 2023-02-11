<?php

namespace xywf221\BSON;

use InvalidArgumentException;
use JsonSerializable;
use Stringable;
use Serializable;

const PARSE_STRING_REGEXP = '/^(\+|-)?(\d+|(\d*\.\d*))?(E|e)?([-+])?(\d+)?$/';
const PARSE_INF_REGEXP = '/^(\+|-)?(Infinity|inf)$/i';
const PARSE_NAN_REGEXP = '/^(\+|-)?NaN$/i';

final class Decimal128 implements Serializable, Type, JsonSerializable, Stringable, Decimal128Interface
{

    private string $dec;

    final public function __construct(string $value)
    {
        // todo valid decimal string
        $this->dec = self::fromString($value);

    }

    private static function fromString(string $representation): string
    {
        // todo js-bson/src/decimal128.ts
        $len = strlen($representation);
        $isNegative = false;
        $index = 0;
        if ($len == 0 || $len >= 7000) {
            throw new InvalidArgumentException("$representation is not a valid decimal string");
        }

        if (!preg_match(PARSE_STRING_REGEXP, $representation, $stringMatch, PREG_UNMATCHED_AS_NULL)
            && !preg_match(PARSE_INF_REGEXP, $representation, $infMatch, PREG_UNMATCHED_AS_NULL)
            && !preg_match(PARSE_NAN_REGEXP, $representation, $nanMatch, PREG_UNMATCHED_AS_NULL)) {
            throw new InvalidArgumentException("$representation is not a valid decimal string");
        }

        if ($stringMatch) {
            $unsignedNumber = $stringMatch[2];

            $e = $stringMatch[4];
            $expSign = $stringMatch[5];
            $expNumber = $stringMatch[6];

            if ($e && $expNumber != null)
                throw new InvalidArgumentException("$representation is not a valid decimal string - missing exponent power");
            if ($e && $unsignedNumber != null)
                throw new InvalidArgumentException("$representation is not a valid decimal string - missing exponent base");
            if ($e == null && ($expSign || $expNumber))
                throw new InvalidArgumentException("$representation is not a valid decimal string - missing e before exponent");
        }

        if ($representation[$index] === '+' || $representation[$index] === '-') {
            $isNegative = $representation[$index++] === '-';
        }
        gmp_import();


        die;
        return '';
    }


    final public function __toString(): string
    {
        return $this->dec;
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
        $this->__construct($data['dec']);
    }


    final public function __serialize(): array
    {
        return ['dec' => $this->dec];
    }


    final public function jsonSerialize(): array
    {
        return ['$numberDecimal' => $this->dec];
    }

    final public function __debugInfo(): ?array
    {
        return ['dec' => $this->dec];
    }
}
