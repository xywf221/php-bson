<?php

namespace xywf221\BSON\Internal\Common;

class Constants
{
    /** Number BSON Type @internal */
    const BSON_DATA_NUMBER = 1;

    /** String BSON Type @internal */
    const BSON_DATA_STRING = 2;

    /** Object BSON Type @internal */
    const BSON_DATA_OBJECT = 3;

    /** Array BSON Type @internal */
    const BSON_DATA_ARRAY = 4;

    /** Binary BSON Type @internal */
    const BSON_DATA_BINARY = 5;

    /** Binary BSON Type @internal */
    const BSON_DATA_UNDEFINED = 6;

    /** ObjectId BSON Type @internal */
    const BSON_DATA_OID = 7;

    /** Boolean BSON Type @internal */
    const BSON_DATA_BOOLEAN = 8;

    /** Date BSON Type @internal */
    const BSON_DATA_DATE = 9;

    /** null BSON Type @internal */
    const BSON_DATA_NULL = 10;

    /** RegExp BSON Type @internal */
    const BSON_DATA_REGEXP = 11;

    /** Code BSON Type @internal */
    const BSON_DATA_DBPOINTER = 12;

    /** Code BSON Type @internal */
    const BSON_DATA_CODE = 13;

    /** Symbol BSON Type @internal */
    const BSON_DATA_SYMBOL = 14;

    /** Code with Scope BSON Type @internal */
    const BSON_DATA_CODE_W_SCOPE = 15;

    /** 32 bit Integer BSON Type @internal */
    const BSON_DATA_INT = 16;

    /** Timestamp BSON Type @internal */
    const BSON_DATA_TIMESTAMP = 17;

    /** Long BSON Type @internal */
    const BSON_DATA_LONG = 18;

    /** Decimal128 BSON Type @internal */
    const BSON_DATA_DECIMAL128 = 19;

    /** MinKey BSON Type @internal */
    const BSON_DATA_MIN_KEY = 0xff;

    /** MaxKey BSON Type @internal */
    const BSON_DATA_MAX_KEY = 0x7f;

    /** Binary Default Type @internal */
    const BSON_BINARY_SUBTYPE_DEFAULT = 0;

    /** Binary Function Type @internal */
    const BSON_BINARY_SUBTYPE_FUNCTION = 1;

    /** Binary Byte Array Type @internal */
    const BSON_BINARY_SUBTYPE_BYTE_ARRAY = 2;

    /** Binary Deprecated UUID Type @deprecated Please use BSON_BINARY_SUBTYPE_UUID_NEW @internal */
    const BSON_BINARY_SUBTYPE_UUID = 3;

    /** Binary UUID Type @internal */
    const BSON_BINARY_SUBTYPE_UUID_NEW = 4;

    /** Binary MD5 Type @internal */
    const BSON_BINARY_SUBTYPE_MD5 = 5;

    /** Encrypted BSON type @internal */
    const BSON_BINARY_SUBTYPE_ENCRYPTED = 6;

    /** Column BSON type @internal */
    const BSON_BINARY_SUBTYPE_COLUMN = 7;

    /** Binary User Defined Type @internal */
    const BSON_BINARY_SUBTYPE_USER_DEFINED = 128;
}