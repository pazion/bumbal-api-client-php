<?php
/**
 * VehicleOptionsModel
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
 * VehicleOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VehicleOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VehicleOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_tags' => 'bool',
        'include_links' => 'bool',
        'include_meta_data' => 'bool',
        'include_updated_by_name' => 'bool',
        'include_vehicle_meta_data' => 'bool',
        'include_vehicle_links' => 'bool',
        'include_vehicle_tags' => 'bool',
        'include_tag_type_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_tags' => null,
        'include_links' => null,
        'include_meta_data' => null,
        'include_updated_by_name' => null,
        'include_vehicle_meta_data' => null,
        'include_vehicle_links' => null,
        'include_vehicle_tags' => null,
        'include_tag_type_name' => null
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
        'include_tags' => 'include_tags',
        'include_links' => 'include_links',
        'include_meta_data' => 'include_meta_data',
        'include_updated_by_name' => 'include_updated_by_name',
        'include_vehicle_meta_data' => 'include_vehicle_meta_data',
        'include_vehicle_links' => 'include_vehicle_links',
        'include_vehicle_tags' => 'include_vehicle_tags',
        'include_tag_type_name' => 'include_tag_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_tags' => 'setIncludeTags',
        'include_links' => 'setIncludeLinks',
        'include_meta_data' => 'setIncludeMetaData',
        'include_updated_by_name' => 'setIncludeUpdatedByName',
        'include_vehicle_meta_data' => 'setIncludeVehicleMetaData',
        'include_vehicle_links' => 'setIncludeVehicleLinks',
        'include_vehicle_tags' => 'setIncludeVehicleTags',
        'include_tag_type_name' => 'setIncludeTagTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_tags' => 'getIncludeTags',
        'include_links' => 'getIncludeLinks',
        'include_meta_data' => 'getIncludeMetaData',
        'include_updated_by_name' => 'getIncludeUpdatedByName',
        'include_vehicle_meta_data' => 'getIncludeVehicleMetaData',
        'include_vehicle_links' => 'getIncludeVehicleLinks',
        'include_vehicle_tags' => 'getIncludeVehicleTags',
        'include_tag_type_name' => 'getIncludeTagTypeName'
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
        $this->container['include_tags'] = isset($data['include_tags']) ? $data['include_tags'] : null;
        $this->container['include_links'] = isset($data['include_links']) ? $data['include_links'] : null;
        $this->container['include_meta_data'] = isset($data['include_meta_data']) ? $data['include_meta_data'] : null;
        $this->container['include_updated_by_name'] = isset($data['include_updated_by_name']) ? $data['include_updated_by_name'] : null;
        $this->container['include_vehicle_meta_data'] = isset($data['include_vehicle_meta_data']) ? $data['include_vehicle_meta_data'] : null;
        $this->container['include_vehicle_links'] = isset($data['include_vehicle_links']) ? $data['include_vehicle_links'] : null;
        $this->container['include_vehicle_tags'] = isset($data['include_vehicle_tags']) ? $data['include_vehicle_tags'] : null;
        $this->container['include_tag_type_name'] = isset($data['include_tag_type_name']) ? $data['include_tag_type_name'] : null;
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
     * Gets include_tags
     * @return bool
     */
    public function getIncludeTags()
    {
        return $this->container['include_tags'];
    }

    /**
     * Sets include_tags
     * @param bool $include_tags 
     * @return $this
     */
    public function setIncludeTags($include_tags)
    {
        $this->container['include_tags'] = $include_tags;

        return $this;
    }

    /**
     * Gets include_links
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['include_links'];
    }

    /**
     * Sets include_links
     * @param bool $include_links 
     * @return $this
     */
    public function setIncludeLinks($include_links)
    {
        $this->container['include_links'] = $include_links;

        return $this;
    }

    /**
     * Gets include_meta_data
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->container['include_meta_data'];
    }

    /**
     * Sets include_meta_data
     * @param bool $include_meta_data 
     * @return $this
     */
    public function setIncludeMetaData($include_meta_data)
    {
        $this->container['include_meta_data'] = $include_meta_data;

        return $this;
    }

    /**
     * Gets include_updated_by_name
     * @return bool
     */
    public function getIncludeUpdatedByName()
    {
        return $this->container['include_updated_by_name'];
    }

    /**
     * Sets include_updated_by_name
     * @param bool $include_updated_by_name 
     * @return $this
     */
    public function setIncludeUpdatedByName($include_updated_by_name)
    {
        $this->container['include_updated_by_name'] = $include_updated_by_name;

        return $this;
    }

    /**
     * Gets include_vehicle_meta_data
     * @return bool
     */
    public function getIncludeVehicleMetaData()
    {
        return $this->container['include_vehicle_meta_data'];
    }

    /**
     * Sets include_vehicle_meta_data
     * @param bool $include_vehicle_meta_data Deprecated! use include_meta_data
     * @return $this
     */
    public function setIncludeVehicleMetaData($include_vehicle_meta_data)
    {
        $this->container['include_vehicle_meta_data'] = $include_vehicle_meta_data;

        return $this;
    }

    /**
     * Gets include_vehicle_links
     * @return bool
     */
    public function getIncludeVehicleLinks()
    {
        return $this->container['include_vehicle_links'];
    }

    /**
     * Sets include_vehicle_links
     * @param bool $include_vehicle_links Deprecated! use include_links
     * @return $this
     */
    public function setIncludeVehicleLinks($include_vehicle_links)
    {
        $this->container['include_vehicle_links'] = $include_vehicle_links;

        return $this;
    }

    /**
     * Gets include_vehicle_tags
     * @return bool
     */
    public function getIncludeVehicleTags()
    {
        return $this->container['include_vehicle_tags'];
    }

    /**
     * Sets include_vehicle_tags
     * @param bool $include_vehicle_tags Deprecated! use include_tags
     * @return $this
     */
    public function setIncludeVehicleTags($include_vehicle_tags)
    {
        $this->container['include_vehicle_tags'] = $include_vehicle_tags;

        return $this;
    }

    /**
     * Gets include_tag_type_name
     * @return bool
     */
    public function getIncludeTagTypeName()
    {
        return $this->container['include_tag_type_name'];
    }

    /**
     * Sets include_tag_type_name
     * @param bool $include_tag_type_name Deprecated! use include_tags
     * @return $this
     */
    public function setIncludeTagTypeName($include_tag_type_name)
    {
        $this->container['include_tag_type_name'] = $include_tag_type_name;

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


