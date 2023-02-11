<?php

/*
name: mongodb, version: 1.15.0


mongodb

MongoDB support => enabled
MongoDB extension version => 1.15.0
MongoDB extension stability => stable
libbson bundled version => 1.23.1
libmongoc bundled version => 1.23.1
libmongoc SSL => enabled
libmongoc SSL library => Secure Transport
libmongoc crypto => enabled
libmongoc crypto library => Common Crypto
libmongoc crypto system profile => disabled
libmongoc SASL => enabled
libmongoc ICU => disabled
libmongoc compression => enabled
libmongoc compression snappy => enabled
libmongoc compression zlib => enabled
libmongoc compression zstd => enabled
libmongocrypt bundled version => 1.5.2
libmongocrypt crypto => enabled
libmongocrypt crypto library => Common Crypto
crypt_shared library version => unknown

Directive => Local Value => Master Value
mongodb.debug => no value => no value

*/


namespace /* GLOBAL NAMESPACE */ {

    define('MONGODB_VERSION', '1.15.0');


    define('MONGODB_STABILITY', 'stable');

}

namespace MongoDB\BSON {


    function fromJSON(string $json) : string 
    {

        $rt = "";
        return $rt;
    }



    function fromPHP(object|array $value) : string 
    {

        $rt = "";
        return $rt;
    }



    function toCanonicalExtendedJSON(string $bson) : string 
    {

        $rt = "";
        return $rt;
    }



    function toJSON(string $bson) : string 
    {

        $rt = "";
        return $rt;
    }



    function toPHP(string $bson, ?array $typemap = NULL) : object|array 
    {

        $rt = [];
        return $rt;
    }



    function toRelaxedExtendedJSON(string $bson) : string 
    {

        $rt = "";
        return $rt;
    }



    interface Type
    {
    }



    interface Serializable extends \MongoDB\BSON\Type
    {

        function bsonSerialize();
    }



    interface Unserializable
    {

        function bsonUnserialize(array $data);
    }



    interface BinaryInterface extends \Stringable
    {

        function getData();


        function getType();


        function __toString() : string ;
    }



    interface Decimal128Interface extends \Stringable
    {

        function __toString();
    }



    interface JavascriptInterface extends \Stringable
    {

        function getCode();


        function getScope();


        function __toString();
    }



    interface MaxKeyInterface
    {
    }



    interface MinKeyInterface
    {
    }



    interface ObjectIdInterface extends \Stringable
    {

        function getTimestamp();


        function __toString();
    }



    interface RegexInterface extends \Stringable
    {

        function getPattern();


        function getFlags();


        function __toString();
    }



    interface TimestampInterface extends \Stringable
    {

        function getTimestamp();


        function getIncrement();


        function __toString();
    }



    interface UTCDateTimeInterface extends \Stringable
    {

        function toDateTime();


        function __toString();
    }



    final class Binary implements \Serializable, \MongoDB\BSON\Type, \JsonSerializable, \Stringable, \MongoDB\BSON\BinaryInterface
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



        final public function __construct(string $data, int $type = \MongoDB\BSON\Binary::TYPE_GENERIC)
        {
        }


        final public function getData() : string 
        {
            /**
             * @see \MongoDB\BSON\BinaryInterface::getData()
             */

            $rt = "";
            return $rt;
        }


        final public function getType() : int 
        {
            /**
             * @see \MongoDB\BSON\BinaryInterface::getType()
             */

            $rt = 1;
            return $rt;
        }


        final public static function __set_state(array $properties) : \MongoDB\BSON\Binary 
        {

            $rt = null;
            return $rt;
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class DBPointer implements \Serializable, \JsonSerializable, \MongoDB\BSON\Type, \Stringable
    {

        final private function __construct()
        {
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class Decimal128 implements \Serializable, \MongoDB\BSON\Type, \JsonSerializable, \Stringable, \MongoDB\BSON\Decimal128Interface
    {

        final public function __construct(string $value)
        {
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public static function __set_state(array $properties) : \MongoDB\BSON\Decimal128 
        {

            $rt = null;
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class Int64 implements \Serializable, \JsonSerializable, \MongoDB\BSON\Type, \Stringable
    {

        final private function __construct()
        {
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class Javascript implements \Serializable, \MongoDB\BSON\Type, \JsonSerializable, \Stringable, \MongoDB\BSON\JavascriptInterface
    {

        final public function __construct(string $code, object|array|null $scope = NULL)
        {
        }


        final public static function __set_state(array $properties) : \MongoDB\BSON\Javascript 
        {

            $rt = null;
            return $rt;
        }


        final public function getCode() : string 
        {
            /**
             * @see \MongoDB\BSON\JavascriptInterface::getCode()
             */

            $rt = "";
            return $rt;
        }


        final public function getScope() : ?object 
        {
            /**
             * @see \MongoDB\BSON\JavascriptInterface::getScope()
             */

            $rt = null;
            return $rt;
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class MaxKey implements \Serializable, \JsonSerializable, \MongoDB\BSON\Type, \MongoDB\BSON\MaxKeyInterface
    {

        final public static function __set_state(array $properties) : \MongoDB\BSON\MaxKey 
        {

            $rt = null;
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class MinKey implements \Serializable, \JsonSerializable, \MongoDB\BSON\Type, \MongoDB\BSON\MinKeyInterface
    {

        final public static function __set_state(array $properties) : \MongoDB\BSON\MinKey 
        {

            $rt = null;
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class ObjectId implements \Serializable, \MongoDB\BSON\Type, \JsonSerializable, \Stringable, \MongoDB\BSON\ObjectIdInterface
    {

        final public function __construct(?string $id = NULL)
        {
        }


        final public function getTimestamp() : int 
        {
            /**
             * @see \MongoDB\BSON\ObjectIdInterface::getTimestamp()
             */

            $rt = 1;
            return $rt;
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public static function __set_state(array $properties) : \MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    interface Persistable extends \MongoDB\BSON\Type, \MongoDB\BSON\Unserializable, \MongoDB\BSON\Serializable
    {
    }



    final class Regex implements \Serializable, \MongoDB\BSON\Type, \JsonSerializable, \Stringable, \MongoDB\BSON\RegexInterface
    {

        final public function __construct(string $pattern, string $flags = '')
        {
        }


        final public function getPattern() : string 
        {
            /**
             * @see \MongoDB\BSON\RegexInterface::getPattern()
             */

            $rt = "";
            return $rt;
        }


        final public function getFlags() : string 
        {
            /**
             * @see \MongoDB\BSON\RegexInterface::getFlags()
             */

            $rt = "";
            return $rt;
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public static function __set_state(array $properties) : \MongoDB\BSON\Regex 
        {

            $rt = null;
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class Symbol implements \Serializable, \JsonSerializable, \MongoDB\BSON\Type, \Stringable
    {

        final private function __construct()
        {
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class Timestamp implements \Serializable, \MongoDB\BSON\Type, \JsonSerializable, \Stringable, \MongoDB\BSON\TimestampInterface
    {

        final public function __construct(string|int $increment, string|int $timestamp)
        {
        }


        final public function getTimestamp() : int 
        {
            /**
             * @see \MongoDB\BSON\TimestampInterface::getTimestamp()
             */

            $rt = 1;
            return $rt;
        }


        final public function getIncrement() : int 
        {
            /**
             * @see \MongoDB\BSON\TimestampInterface::getIncrement()
             */

            $rt = 1;
            return $rt;
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public static function __set_state(array $properties) : \MongoDB\BSON\Timestamp 
        {

            $rt = null;
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class Undefined implements \Serializable, \JsonSerializable, \MongoDB\BSON\Type, \Stringable
    {

        final private function __construct()
        {
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }



    final class UTCDateTime implements \Serializable, \MongoDB\BSON\Type, \JsonSerializable, \Stringable, \MongoDB\BSON\UTCDateTimeInterface
    {

        final public function __construct(\DateTimeInterface|string|int|float|null $milliseconds = NULL)
        {
        }


        final public function toDateTime() : \DateTime 
        {
            /**
             * @see \MongoDB\BSON\UTCDateTimeInterface::toDateTime()
             */

            $rt = null;
            return $rt;
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public static function __set_state(array $properties) : \MongoDB\BSON\UTCDateTime 
        {

            $rt = null;
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function jsonSerialize() : mixed 
        {
            /**
             * @see \JsonSerializable::jsonSerialize()
             */

            $rt = null;
            return $rt;
        }
    }

}

namespace MongoDB\Driver\Monitoring {


    function addSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber) : void 
    {
    }



    function removeSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber) : void 
    {
    }



    interface Subscriber
    {
    }



    interface CommandSubscriber extends \MongoDB\Driver\Monitoring\Subscriber
    {

        function commandStarted(\MongoDB\Driver\Monitoring\CommandStartedEvent $event);


        function commandSucceeded(\MongoDB\Driver\Monitoring\CommandSucceededEvent $event);


        function commandFailed(\MongoDB\Driver\Monitoring\CommandFailedEvent $event);
    }



    final class CommandFailedEvent
    {

        final private function __construct()
        {
        }


        final public function getCommandName() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getDurationMicros() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getError() : \Exception 
        {

            $rt = null;
            return $rt;
        }


        final public function getOperationId() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getReply() : object 
        {

            $rt = null;
            return $rt;
        }


        final public function getRequestId() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getServer() : \MongoDB\Driver\Server 
        {

            $rt = null;
            return $rt;
        }


        final public function getServiceId() : ?\MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function getServerConnectionId() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class CommandStartedEvent
    {

        final private function __construct()
        {
        }


        final public function getCommand() : object 
        {

            $rt = null;
            return $rt;
        }


        final public function getCommandName() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getDatabaseName() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getOperationId() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getRequestId() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getServer() : \MongoDB\Driver\Server 
        {

            $rt = null;
            return $rt;
        }


        final public function getServiceId() : ?\MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function getServerConnectionId() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class CommandSucceededEvent
    {

        final private function __construct()
        {
        }


        final public function getCommandName() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getDurationMicros() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getOperationId() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getReply() : object 
        {

            $rt = null;
            return $rt;
        }


        final public function getRequestId() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getServer() : \MongoDB\Driver\Server 
        {

            $rt = null;
            return $rt;
        }


        final public function getServiceId() : ?\MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function getServerConnectionId() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    interface SDAMSubscriber extends \MongoDB\Driver\Monitoring\Subscriber
    {

        function serverChanged(\MongoDB\Driver\Monitoring\ServerChangedEvent $event);


        function serverClosed(\MongoDB\Driver\Monitoring\ServerClosedEvent $event);


        function serverOpening(\MongoDB\Driver\Monitoring\ServerOpeningEvent $event);


        function serverHeartbeatFailed(\MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent $event);


        function serverHeartbeatStarted(\MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent $event);


        function serverHeartbeatSucceeded(\MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent $event);


        function topologyChanged(\MongoDB\Driver\Monitoring\TopologyChangedEvent $event);


        function topologyClosed(\MongoDB\Driver\Monitoring\TopologyClosedEvent $event);


        function topologyOpening(\MongoDB\Driver\Monitoring\TopologyOpeningEvent $event);
    }



    final class ServerChangedEvent
    {

        final private function __construct()
        {
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getNewDescription() : \MongoDB\Driver\ServerDescription 
        {

            $rt = null;
            return $rt;
        }


        final public function getPreviousDescription() : \MongoDB\Driver\ServerDescription 
        {

            $rt = null;
            return $rt;
        }


        final public function getTopologyId() : \MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ServerClosedEvent
    {

        final private function __construct()
        {
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getTopologyId() : \MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ServerHeartbeatFailedEvent
    {

        final private function __construct()
        {
        }


        final public function getDurationMicros() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getError() : \Exception 
        {

            $rt = null;
            return $rt;
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function isAwaited() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ServerHeartbeatStartedEvent
    {

        final private function __construct()
        {
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function isAwaited() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ServerHeartbeatSucceededEvent
    {

        final private function __construct()
        {
        }


        final public function getDurationMicros() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getReply() : object 
        {

            $rt = null;
            return $rt;
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function isAwaited() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ServerOpeningEvent
    {

        final private function __construct()
        {
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getTopologyId() : \MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class TopologyChangedEvent
    {

        final private function __construct()
        {
        }


        final public function getNewDescription() : \MongoDB\Driver\TopologyDescription 
        {

            $rt = null;
            return $rt;
        }


        final public function getPreviousDescription() : \MongoDB\Driver\TopologyDescription 
        {

            $rt = null;
            return $rt;
        }


        final public function getTopologyId() : \MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class TopologyClosedEvent
    {

        final private function __construct()
        {
        }


        final public function getTopologyId() : \MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class TopologyOpeningEvent
    {

        final private function __construct()
        {
        }


        final public function getTopologyId() : \MongoDB\BSON\ObjectId 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }

}

namespace MongoDB\Driver {


    interface CursorInterface
    {

        function getId();


        function getServer();


        function isDead();


        function setTypeMap(array $typemap);


        function toArray();
    }



    final class BulkWrite implements \Countable
    {

        final public function __construct(?array $options = NULL)
        {
        }


        public function count() : int 
        {
            /**
             * @see \Countable::count()
             */

            $rt = 1;
            return $rt;
        }


        public function delete(object|array $filter, ?array $deleteOptions = NULL) : void 
        {
        }


        final public function insert(object|array $document) : mixed 
        {

            $rt = null;
            return $rt;
        }


        public function update(object|array $filter, object|array $newObj, ?array $updateOptions = NULL) : void 
        {
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ClientEncryption
    {

        public const AEAD_AES_256_CBC_HMAC_SHA_512_DETERMINISTIC = 'AEAD_AES_256_CBC_HMAC_SHA_512-Deterministic';


        public const AEAD_AES_256_CBC_HMAC_SHA_512_RANDOM = 'AEAD_AES_256_CBC_HMAC_SHA_512-Random';


        public const ALGORITHM_INDEXED = 'Indexed';


        public const ALGORITHM_UNINDEXED = 'Unindexed';


        public const QUERY_TYPE_EQUALITY = 'equality';



        final public function __construct(array $options)
        {
        }


        final public function addKeyAltName(\MongoDB\BSON\Binary $keyId, string $keyAltName) : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function createDataKey(string $kmsProvider, ?array $options = NULL) : \MongoDB\BSON\Binary 
        {

            $rt = null;
            return $rt;
        }


        final public function decrypt(\MongoDB\BSON\Binary $value) : mixed 
        {

            $rt = null;
            return $rt;
        }


        final public function deleteKey(\MongoDB\BSON\Binary $keyId) : object 
        {

            $rt = null;
            return $rt;
        }


        final public function encrypt(mixed $value, ?array $options = NULL) : \MongoDB\BSON\Binary 
        {

            $rt = null;
            return $rt;
        }


        final public function getKey(\MongoDB\BSON\Binary $keyId) : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function getKeyByAltName(string $keyAltName) : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function getKeys() : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function removeKeyAltName(\MongoDB\BSON\Binary $keyId, string $keyAltName) : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function rewrapManyDataKey(object|array $filter, ?array $options = NULL) : object 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class Command
    {

        final public function __construct(object|array $document, ?array $commandOptions = NULL)
        {
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class Cursor implements \MongoDB\Driver\CursorInterface, \Iterator
    {

        final private function __construct()
        {
        }


        public function current() : object|array|null 
        {
            /**
             * @see \Iterator::current()
             */

            $rt = [];
            return $rt;
        }


        final public function getId() : \MongoDB\Driver\CursorId 
        {
            /**
             * @see \MongoDB\Driver\CursorInterface::getId()
             */

            $rt = null;
            return $rt;
        }


        final public function getServer() : \MongoDB\Driver\Server 
        {
            /**
             * @see \MongoDB\Driver\CursorInterface::getServer()
             */

            $rt = null;
            return $rt;
        }


        final public function isDead() : bool 
        {
            /**
             * @see \MongoDB\Driver\CursorInterface::isDead()
             */

            $rt = true;
            return $rt;
        }


        public function key() : ?int 
        {
            /**
             * @see \Iterator::key()
             */

            $rt = 1;
            return $rt;
        }


        public function next() : void 
        {
            /**
             * @see \Iterator::next()
             */
        }


        public function rewind() : void 
        {
            /**
             * @see \Iterator::rewind()
             */
        }


        final public function setTypeMap(array $typemap) : void 
        {
            /**
             * @see \MongoDB\Driver\CursorInterface::setTypeMap()
             */
        }


        final public function toArray() : array 
        {
            /**
             * @see \MongoDB\Driver\CursorInterface::toArray()
             */

            $rt = [];
            return $rt;
        }


        public function valid() : bool 
        {
            /**
             * @see \Iterator::valid()
             */

            $rt = true;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class CursorId implements \Serializable, \Stringable
    {

        final private function __construct()
        {
        }


        final public static function __set_state(array $properties) : \MongoDB\Driver\CursorId 
        {

            $rt = null;
            return $rt;
        }


        final public function __toString() : string 
        {
            /**
             * @see \Stringable::__toString()
             */

            return '';
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }
    }



    final class Manager
    {

        final public function __construct(?string $uri = NULL, ?array $uriOptions = NULL, ?array $driverOptions = NULL)
        {
        }


        final public function addSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber) : void 
        {
        }


        final public function createClientEncryption(array $options) : \MongoDB\Driver\ClientEncryption 
        {

            $rt = null;
            return $rt;
        }


        final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, \MongoDB\Driver\WriteConcern|array|null $options = NULL) : \MongoDB\Driver\WriteResult 
        {

            $rt = null;
            return $rt;
        }


        final public function executeCommand(string $db, \MongoDB\Driver\Command $command, \MongoDB\Driver\ReadPreference|array|null $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, \MongoDB\Driver\ReadPreference|array|null $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, ?array $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, ?array $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, ?array $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function getEncryptedFieldsMap() : object|array|null 
        {

            $rt = [];
            return $rt;
        }


        final public function getReadConcern() : \MongoDB\Driver\ReadConcern 
        {

            $rt = null;
            return $rt;
        }


        final public function getReadPreference() : \MongoDB\Driver\ReadPreference 
        {

            $rt = null;
            return $rt;
        }


        final public function getServers() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function getWriteConcern() : \MongoDB\Driver\WriteConcern 
        {

            $rt = null;
            return $rt;
        }


        final public function removeSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber) : void 
        {
        }


        final public function selectServer(?\MongoDB\Driver\ReadPreference $readPreference = NULL) : \MongoDB\Driver\Server 
        {

            $rt = null;
            return $rt;
        }


        final public function startSession(?array $options = NULL) : \MongoDB\Driver\Session 
        {

            $rt = null;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class Query
    {

        final public function __construct(object|array $filter, ?array $queryOptions = NULL)
        {
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ReadConcern implements \MongoDB\BSON\Type, \Serializable, \MongoDB\BSON\Serializable
    {

        public const LINEARIZABLE = 'linearizable';


        public const LOCAL = 'local';


        public const MAJORITY = 'majority';


        public const AVAILABLE = 'available';


        public const SNAPSHOT = 'snapshot';



        final public function __construct(?string $level = NULL)
        {
        }


        final public function getLevel() : ?string 
        {

            $rt = "";
            return $rt;
        }


        final public function isDefault() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public static function __set_state(array $properties) : \MongoDB\Driver\ReadConcern 
        {

            $rt = null;
            return $rt;
        }


        final public function bsonSerialize() : object|array 
        {
            /**
             * @see \MongoDB\BSON\Serializable::bsonSerialize()
             */

            $rt = [];
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }
    }



    final class ReadPreference implements \MongoDB\BSON\Type, \Serializable, \MongoDB\BSON\Serializable
    {

        public const RP_PRIMARY = 1;


        public const RP_PRIMARY_PREFERRED = 5;


        public const RP_SECONDARY = 2;


        public const RP_SECONDARY_PREFERRED = 6;


        public const RP_NEAREST = 10;


        public const PRIMARY = 'primary';


        public const PRIMARY_PREFERRED = 'primaryPreferred';


        public const SECONDARY = 'secondary';


        public const SECONDARY_PREFERRED = 'secondaryPreferred';


        public const NEAREST = 'nearest';


        public const NO_MAX_STALENESS = -1;


        public const SMALLEST_MAX_STALENESS_SECONDS = 90;



        final public function __construct(string|int $mode, ?array $tagSets = NULL, ?array $options = NULL)
        {
        }


        final public function getHedge() : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function getMaxStalenessSeconds() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getMode() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getModeString() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getTagSets() : array 
        {

            $rt = [];
            return $rt;
        }


        final public static function __set_state(array $properties) : \MongoDB\Driver\ReadPreference 
        {

            $rt = null;
            return $rt;
        }


        final public function bsonSerialize() : object|array 
        {
            /**
             * @see \MongoDB\BSON\Serializable::bsonSerialize()
             */

            $rt = [];
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }
    }



    final class Server
    {

        public const TYPE_UNKNOWN = 0;


        public const TYPE_STANDALONE = 1;


        public const TYPE_MONGOS = 2;


        public const TYPE_POSSIBLE_PRIMARY = 3;


        public const TYPE_RS_PRIMARY = 4;


        public const TYPE_RS_SECONDARY = 5;


        public const TYPE_RS_ARBITER = 6;


        public const TYPE_RS_OTHER = 7;


        public const TYPE_RS_GHOST = 8;


        public const TYPE_LOAD_BALANCER = 9;



        final private function __construct()
        {
        }


        final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulkWrite, \MongoDB\Driver\WriteConcern|array|null $options = NULL) : \MongoDB\Driver\WriteResult 
        {

            $rt = null;
            return $rt;
        }


        final public function executeCommand(string $db, \MongoDB\Driver\Command $command, \MongoDB\Driver\ReadPreference|array|null $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, \MongoDB\Driver\ReadPreference|array|null $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, ?array $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, ?array $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, ?array $options = NULL) : \MongoDB\Driver\Cursor 
        {

            $rt = null;
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getInfo() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function getLatency() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getServerDescription() : \MongoDB\Driver\ServerDescription 
        {

            $rt = null;
            return $rt;
        }


        final public function getTags() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function getType() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function isArbiter() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function isHidden() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function isPassive() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function isPrimary() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function isSecondary() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class ServerApi implements \MongoDB\BSON\Type, \Serializable, \MongoDB\BSON\Serializable
    {

        public const V1 = '1';



        final public function __construct(string $version, ?bool $strict = NULL, ?bool $deprecationErrors = NULL)
        {
        }


        final public static function __set_state(array $properties) : \MongoDB\Driver\ServerApi 
        {

            $rt = null;
            return $rt;
        }


        final public function bsonSerialize() : object|array 
        {
            /**
             * @see \MongoDB\BSON\Serializable::bsonSerialize()
             */

            $rt = [];
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }
    }



    final class ServerDescription
    {

        public const TYPE_UNKNOWN = 'Unknown';


        public const TYPE_STANDALONE = 'Standalone';


        public const TYPE_MONGOS = 'Mongos';


        public const TYPE_POSSIBLE_PRIMARY = 'PossiblePrimary';


        public const TYPE_RS_PRIMARY = 'RSPrimary';


        public const TYPE_RS_SECONDARY = 'RSSecondary';


        public const TYPE_RS_ARBITER = 'RSArbiter';


        public const TYPE_RS_OTHER = 'RSOther';


        public const TYPE_RS_GHOST = 'RSGhost';


        public const TYPE_LOAD_BALANCER = 'LoadBalancer';



        final private function __construct()
        {
        }


        final public function getHelloResponse() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function getHost() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function getLastUpdateTime() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getPort() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getRoundTripTime() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getType() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class TopologyDescription
    {

        public const TYPE_UNKNOWN = 'Unknown';


        public const TYPE_SINGLE = 'Single';


        public const TYPE_SHARDED = 'Sharded';


        public const TYPE_REPLICA_SET_NO_PRIMARY = 'ReplicaSetNoPrimary';


        public const TYPE_REPLICA_SET_WITH_PRIMARY = 'ReplicaSetWithPrimary';


        public const TYPE_LOAD_BALANCED = 'LoadBalanced';



        final private function __construct()
        {
        }


        final public function getServers() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function getType() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function hasReadableServer(?\MongoDB\Driver\ReadPreference $readPreference = NULL) : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function hasWritableServer() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class Session
    {

        public const TRANSACTION_NONE = 'none';


        public const TRANSACTION_STARTING = 'starting';


        public const TRANSACTION_IN_PROGRESS = 'in_progress';


        public const TRANSACTION_COMMITTED = 'committed';


        public const TRANSACTION_ABORTED = 'aborted';



        final private function __construct()
        {
        }


        final public function abortTransaction() : void 
        {
        }


        final public function advanceClusterTime(object|array $clusterTime) : void 
        {
        }


        final public function advanceOperationTime(\MongoDB\BSON\TimestampInterface $operationTime) : void 
        {
        }


        final public function commitTransaction() : void 
        {
        }


        final public function endSession() : void 
        {
        }


        final public function getClusterTime() : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function getLogicalSessionId() : object 
        {

            $rt = null;
            return $rt;
        }


        final public function getOperationTime() : ?\MongoDB\BSON\Timestamp 
        {

            $rt = null;
            return $rt;
        }


        final public function getServer() : ?\MongoDB\Driver\Server 
        {

            $rt = null;
            return $rt;
        }


        final public function getTransactionOptions() : ?array 
        {

            $rt = [];
            return $rt;
        }


        final public function getTransactionState() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function isDirty() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function isInTransaction() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function startTransaction(?array $options = NULL) : void 
        {
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class WriteConcern implements \MongoDB\BSON\Type, \Serializable, \MongoDB\BSON\Serializable
    {

        public const MAJORITY = 'majority';



        final public function __construct(string|int $w, ?int $wtimeout = NULL, ?bool $journal = NULL)
        {
        }


        final public function getJournal() : ?bool 
        {

            $rt = true;
            return $rt;
        }


        final public function getW() : string|int|null 
        {

            $rt = "";
            return $rt;
        }


        final public function getWtimeout() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function isDefault() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public static function __set_state(array $properties) : \MongoDB\Driver\WriteConcern 
        {

            $rt = null;
            return $rt;
        }


        final public function bsonSerialize() : object|array 
        {
            /**
             * @see \MongoDB\BSON\Serializable::bsonSerialize()
             */

            $rt = [];
            return $rt;
        }


        final public function serialize() : string 
        {
            /**
             * @see \Serializable::serialize()
             */

            $rt = "";
            return $rt;
        }


        final public function unserialize($serialized) : void 
        {
            /**
             * @see \Serializable::unserialize()
             */
        }


        final public function __unserialize(array $data) : void 
        {
        }


        final public function __serialize() : array 
        {

            $rt = [];
            return $rt;
        }
    }



    final class WriteConcernError
    {

        final private function __construct()
        {
        }


        final public function getCode() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getInfo() : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function getMessage() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class WriteError
    {

        final private function __construct()
        {
        }


        final public function getCode() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getIndex() : int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getInfo() : ?object 
        {

            $rt = null;
            return $rt;
        }


        final public function getMessage() : string 
        {

            $rt = "";
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }



    final class WriteResult
    {

        final private function __construct()
        {
        }


        final public function getInsertedCount() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getMatchedCount() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getModifiedCount() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getDeletedCount() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getUpsertedCount() : ?int 
        {

            $rt = 1;
            return $rt;
        }


        final public function getServer() : \MongoDB\Driver\Server 
        {

            $rt = null;
            return $rt;
        }


        final public function getUpsertedIds() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function getWriteConcernError() : ?\MongoDB\Driver\WriteConcernError 
        {

            $rt = null;
            return $rt;
        }


        final public function getWriteErrors() : array 
        {

            $rt = [];
            return $rt;
        }


        final public function isAcknowledged() : bool 
        {

            $rt = true;
            return $rt;
        }


        final public function __wakeup() : void 
        {
        }
    }

}

namespace MongoDB\Driver\Exception {


    interface Exception extends \Stringable, \Throwable
    {
    }



    class RuntimeException extends \RuntimeException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {

        protected  $errorLabels;



        final public function hasErrorLabel(string $errorLabel) : bool 
        {

            $rt = true;
            return $rt;
        }
    }



    class ServerException extends \MongoDB\Driver\Exception\RuntimeException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    class ConnectionException extends \MongoDB\Driver\Exception\RuntimeException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    abstract class WriteException extends \MongoDB\Driver\Exception\ServerException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {

        protected  $writeResult;



        final public function getWriteResult() : \MongoDB\Driver\WriteResult 
        {

            $rt = null;
            return $rt;
        }
    }



    class AuthenticationException extends \MongoDB\Driver\Exception\ConnectionException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    class BulkWriteException extends \MongoDB\Driver\Exception\WriteException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    class CommandException extends \MongoDB\Driver\Exception\ServerException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {

        protected  $resultDocument;



        final public function getResultDocument() : object 
        {

            $rt = null;
            return $rt;
        }
    }



    final class ConnectionTimeoutException extends \MongoDB\Driver\Exception\ConnectionException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    class EncryptionException extends \MongoDB\Driver\Exception\RuntimeException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    final class ExecutionTimeoutException extends \MongoDB\Driver\Exception\ServerException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    class InvalidArgumentException extends \InvalidArgumentException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    class LogicException extends \LogicException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    final class SSLConnectionException extends \MongoDB\Driver\Exception\ConnectionException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }



    class UnexpectedValueException extends \UnexpectedValueException implements \Stringable, \Throwable, \MongoDB\Driver\Exception\Exception
    {


    }

}
