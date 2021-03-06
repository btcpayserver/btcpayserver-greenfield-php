<?php
/**
 * CreateOnChainTransactionRequest
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
 * CreateOnChainTransactionRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateOnChainTransactionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateOnChainTransactionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destinations' => '\Swagger\Client\Model\CreateOnChainTransactionRequestDestination[]',
'fee_rate' => 'float',
'proceed_with_payjoin' => 'bool',
'proceed_with_broadcast' => 'bool',
'no_change' => 'bool',
'rbf' => 'bool',
'selected_inputs' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destinations' => null,
'fee_rate' => 'decimal or long (sats/byte)',
'proceed_with_payjoin' => null,
'proceed_with_broadcast' => null,
'no_change' => null,
'rbf' => null,
'selected_inputs' => null    ];

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
        'destinations' => 'destinations',
'fee_rate' => 'feeRate',
'proceed_with_payjoin' => 'proceedWithPayjoin',
'proceed_with_broadcast' => 'proceedWithBroadcast',
'no_change' => 'noChange',
'rbf' => 'rbf',
'selected_inputs' => 'selectedInputs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destinations' => 'setDestinations',
'fee_rate' => 'setFeeRate',
'proceed_with_payjoin' => 'setProceedWithPayjoin',
'proceed_with_broadcast' => 'setProceedWithBroadcast',
'no_change' => 'setNoChange',
'rbf' => 'setRbf',
'selected_inputs' => 'setSelectedInputs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destinations' => 'getDestinations',
'fee_rate' => 'getFeeRate',
'proceed_with_payjoin' => 'getProceedWithPayjoin',
'proceed_with_broadcast' => 'getProceedWithBroadcast',
'no_change' => 'getNoChange',
'rbf' => 'getRbf',
'selected_inputs' => 'getSelectedInputs'    ];

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
        $this->container['destinations'] = isset($data['destinations']) ? $data['destinations'] : null;
        $this->container['fee_rate'] = isset($data['fee_rate']) ? $data['fee_rate'] : null;
        $this->container['proceed_with_payjoin'] = isset($data['proceed_with_payjoin']) ? $data['proceed_with_payjoin'] : true;
        $this->container['proceed_with_broadcast'] = isset($data['proceed_with_broadcast']) ? $data['proceed_with_broadcast'] : true;
        $this->container['no_change'] = isset($data['no_change']) ? $data['no_change'] : false;
        $this->container['rbf'] = isset($data['rbf']) ? $data['rbf'] : null;
        $this->container['selected_inputs'] = isset($data['selected_inputs']) ? $data['selected_inputs'] : null;
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
     * Gets destinations
     *
     * @return \Swagger\Client\Model\CreateOnChainTransactionRequestDestination[]
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \Swagger\Client\Model\CreateOnChainTransactionRequestDestination[] $destinations What and where to send money
     *
     * @return $this
     */
    public function setDestinations($destinations)
    {
        $this->container['destinations'] = $destinations;

        return $this;
    }

    /**
     * Gets fee_rate
     *
     * @return float
     */
    public function getFeeRate()
    {
        return $this->container['fee_rate'];
    }

    /**
     * Sets fee_rate
     *
     * @param float $fee_rate A wallet address or a BIP21 payment link
     *
     * @return $this
     */
    public function setFeeRate($fee_rate)
    {
        $this->container['fee_rate'] = $fee_rate;

        return $this;
    }

    /**
     * Gets proceed_with_payjoin
     *
     * @return bool
     */
    public function getProceedWithPayjoin()
    {
        return $this->container['proceed_with_payjoin'];
    }

    /**
     * Sets proceed_with_payjoin
     *
     * @param bool $proceed_with_payjoin Whether to attempt to do a BIP78 payjoin if one of the destinations is a BIP21 with payjoin enabled
     *
     * @return $this
     */
    public function setProceedWithPayjoin($proceed_with_payjoin)
    {
        $this->container['proceed_with_payjoin'] = $proceed_with_payjoin;

        return $this;
    }

    /**
     * Gets proceed_with_broadcast
     *
     * @return bool
     */
    public function getProceedWithBroadcast()
    {
        return $this->container['proceed_with_broadcast'];
    }

    /**
     * Sets proceed_with_broadcast
     *
     * @param bool $proceed_with_broadcast Whether to broadcast the transaction after creating it or to simply return the transaction in hex format.
     *
     * @return $this
     */
    public function setProceedWithBroadcast($proceed_with_broadcast)
    {
        $this->container['proceed_with_broadcast'] = $proceed_with_broadcast;

        return $this;
    }

    /**
     * Gets no_change
     *
     * @return bool
     */
    public function getNoChange()
    {
        return $this->container['no_change'];
    }

    /**
     * Sets no_change
     *
     * @param bool $no_change Whether to send all the spent coins to the destinations (THIS CAN COST YOU SIGNIFICANT AMOUNTS OF MONEY, LEAVE FALSE UNLESS YOU KNOW WHAT YOU ARE DOING).
     *
     * @return $this
     */
    public function setNoChange($no_change)
    {
        $this->container['no_change'] = $no_change;

        return $this;
    }

    /**
     * Gets rbf
     *
     * @return bool
     */
    public function getRbf()
    {
        return $this->container['rbf'];
    }

    /**
     * Sets rbf
     *
     * @param bool $rbf Whether to enable RBF for the transaction. Leave blank to have it random (beneficial to privacy)
     *
     * @return $this
     */
    public function setRbf($rbf)
    {
        $this->container['rbf'] = $rbf;

        return $this;
    }

    /**
     * Gets selected_inputs
     *
     * @return string[]
     */
    public function getSelectedInputs()
    {
        return $this->container['selected_inputs'];
    }

    /**
     * Sets selected_inputs
     *
     * @param string[] $selected_inputs Restrict the creation of the transactions from the outpoints provided ONLY (coin selection)
     *
     * @return $this
     */
    public function setSelectedInputs($selected_inputs)
    {
        $this->container['selected_inputs'] = $selected_inputs;

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
