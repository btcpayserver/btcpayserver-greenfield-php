<?php
/**
 * ApplicationServerInfoData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BTCPay Greenfield API
 *
 * A full API to use your BTCPay Server
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.26
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ApplicationServerInfoData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplicationServerInfoData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApplicationServerInfoData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version' => 'string',
'onion' => 'string',
'supported_payment_methods' => 'string[]',
'fully_synched' => 'bool',
'sync_status' => '\Swagger\Client\Model\ApplicationServerInfoSyncStatusData[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version' => null,
'onion' => null,
'supported_payment_methods' => null,
'fully_synched' => null,
'sync_status' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'version' => 'version',
'onion' => 'onion',
'supported_payment_methods' => 'supportedPaymentMethods',
'fully_synched' => 'fullySynched',
'sync_status' => 'syncStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
'onion' => 'setOnion',
'supported_payment_methods' => 'setSupportedPaymentMethods',
'fully_synched' => 'setFullySynched',
'sync_status' => 'setSyncStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
'onion' => 'getOnion',
'supported_payment_methods' => 'getSupportedPaymentMethods',
'fully_synched' => 'getFullySynched',
'sync_status' => 'getSyncStatus'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['onion'] = isset($data['onion']) ? $data['onion'] : null;
        $this->container['supported_payment_methods'] = isset($data['supported_payment_methods']) ? $data['supported_payment_methods'] : null;
        $this->container['fully_synched'] = isset($data['fully_synched']) ? $data['fully_synched'] : null;
        $this->container['sync_status'] = isset($data['sync_status']) ? $data['sync_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version BTCPay Server version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets onion
     *
     * @return string
     */
    public function getOnion()
    {
        return $this->container['onion'];
    }

    /**
     * Sets onion
     *
     * @param string $onion The Tor hostname
     *
     * @return $this
     */
    public function setOnion($onion)
    {
        $this->container['onion'] = $onion;

        return $this;
    }

    /**
     * Gets supported_payment_methods
     *
     * @return string[]
     */
    public function getSupportedPaymentMethods()
    {
        return $this->container['supported_payment_methods'];
    }

    /**
     * Sets supported_payment_methods
     *
     * @param string[] $supported_payment_methods The payment methods this server supports
     *
     * @return $this
     */
    public function setSupportedPaymentMethods($supported_payment_methods)
    {
        $this->container['supported_payment_methods'] = $supported_payment_methods;

        return $this;
    }

    /**
     * Gets fully_synched
     *
     * @return bool
     */
    public function getFullySynched()
    {
        return $this->container['fully_synched'];
    }

    /**
     * Sets fully_synched
     *
     * @param bool $fully_synched True if the instance is fully synchronized, according to NBXplorer
     *
     * @return $this
     */
    public function setFullySynched($fully_synched)
    {
        $this->container['fully_synched'] = $fully_synched;

        return $this;
    }

    /**
     * Gets sync_status
     *
     * @return \Swagger\Client\Model\ApplicationServerInfoSyncStatusData[]
     */
    public function getSyncStatus()
    {
        return $this->container['sync_status'];
    }

    /**
     * Sets sync_status
     *
     * @param \Swagger\Client\Model\ApplicationServerInfoSyncStatusData[] $sync_status sync_status
     *
     * @return $this
     */
    public function setSyncStatus($sync_status)
    {
        $this->container['sync_status'] = $sync_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
