<?php
/**
 * AppliedCapacityModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * AppliedCapacityModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AppliedCapacityModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AppliedCapacityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'capacity_type_id' => 'int',
        'capacity_type_name' => 'string',
        'uom_id' => 'int',
        'uom_name' => 'string',
        'capacity_value' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'capacity_type_id' => 'int64',
        'capacity_type_name' => null,
        'uom_id' => 'int64',
        'uom_name' => null,
        'capacity_value' => 'int64'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'capacity_type_id' => 'capacity_type_id',
        'capacity_type_name' => 'capacity_type_name',
        'uom_id' => 'uom_id',
        'uom_name' => 'uom_name',
        'capacity_value' => 'capacity_value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'capacity_type_id' => 'setCapacityTypeId',
        'capacity_type_name' => 'setCapacityTypeName',
        'uom_id' => 'setUomId',
        'uom_name' => 'setUomName',
        'capacity_value' => 'setCapacityValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'capacity_type_id' => 'getCapacityTypeId',
        'capacity_type_name' => 'getCapacityTypeName',
        'uom_id' => 'getUomId',
        'uom_name' => 'getUomName',
        'capacity_value' => 'getCapacityValue'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['capacity_type_id'] = isset($data['capacity_type_id']) ? $data['capacity_type_id'] : null;
        $this->container['capacity_type_name'] = isset($data['capacity_type_name']) ? $data['capacity_type_name'] : null;
        $this->container['uom_id'] = isset($data['uom_id']) ? $data['uom_id'] : null;
        $this->container['uom_name'] = isset($data['uom_name']) ? $data['uom_name'] : null;
        $this->container['capacity_value'] = isset($data['capacity_value']) ? $data['capacity_value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets capacity_type_id
     * @return int
     */
    public function getCapacityTypeId()
    {
        return $this->container['capacity_type_id'];
    }

    /**
     * Sets capacity_type_id
     * @param int $capacity_type_id Capacity type ID
     * @return $this
     */
    public function setCapacityTypeId($capacity_type_id)
    {
        $this->container['capacity_type_id'] = $capacity_type_id;

        return $this;
    }

    /**
     * Gets capacity_type_name
     * @return string
     */
    public function getCapacityTypeName()
    {
        return $this->container['capacity_type_name'];
    }

    /**
     * Sets capacity_type_name
     * @param string $capacity_type_name Capacity type name
     * @return $this
     */
    public function setCapacityTypeName($capacity_type_name)
    {
        $this->container['capacity_type_name'] = $capacity_type_name;

        return $this;
    }

    /**
     * Gets uom_id
     * @return int
     */
    public function getUomId()
    {
        return $this->container['uom_id'];
    }

    /**
     * Sets uom_id
     * @param int $uom_id Unit of measurement ID
     * @return $this
     */
    public function setUomId($uom_id)
    {
        $this->container['uom_id'] = $uom_id;

        return $this;
    }

    /**
     * Gets uom_name
     * @return string
     */
    public function getUomName()
    {
        return $this->container['uom_name'];
    }

    /**
     * Sets uom_name
     * @param string $uom_name Unit of measurement name
     * @return $this
     */
    public function setUomName($uom_name)
    {
        $this->container['uom_name'] = $uom_name;

        return $this;
    }

    /**
     * Gets capacity_value
     * @return int
     */
    public function getCapacityValue()
    {
        return $this->container['capacity_value'];
    }

    /**
     * Sets capacity_value
     * @param int $capacity_value Capacity value
     * @return $this
     */
    public function setCapacityValue($capacity_value)
    {
        $this->container['capacity_value'] = $capacity_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


