<?php
/**
 * CommunicationMappingOptionsModel
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
 * Contact: info@bumbal.eu
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
 * CommunicationMappingOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommunicationMappingOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationMappingOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_template_name' => 'bool',
        'include_template_object' => 'bool',
        'include_tags' => 'bool',
        'include_tag_names' => 'bool',
        'include_zones' => 'bool',
        'include_zone_names' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_template_name' => null,
        'include_template_object' => null,
        'include_tags' => null,
        'include_tag_names' => null,
        'include_zones' => null,
        'include_zone_names' => null
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
        'include_template_name' => 'include_template_name',
        'include_template_object' => 'include_template_object',
        'include_tags' => 'include_tags',
        'include_tag_names' => 'include_tag_names',
        'include_zones' => 'include_zones',
        'include_zone_names' => 'include_zone_names'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_template_name' => 'setIncludeTemplateName',
        'include_template_object' => 'setIncludeTemplateObject',
        'include_tags' => 'setIncludeTags',
        'include_tag_names' => 'setIncludeTagNames',
        'include_zones' => 'setIncludeZones',
        'include_zone_names' => 'setIncludeZoneNames'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_template_name' => 'getIncludeTemplateName',
        'include_template_object' => 'getIncludeTemplateObject',
        'include_tags' => 'getIncludeTags',
        'include_tag_names' => 'getIncludeTagNames',
        'include_zones' => 'getIncludeZones',
        'include_zone_names' => 'getIncludeZoneNames'
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
        $this->container['include_template_name'] = isset($data['include_template_name']) ? $data['include_template_name'] : null;
        $this->container['include_template_object'] = isset($data['include_template_object']) ? $data['include_template_object'] : null;
        $this->container['include_tags'] = isset($data['include_tags']) ? $data['include_tags'] : null;
        $this->container['include_tag_names'] = isset($data['include_tag_names']) ? $data['include_tag_names'] : null;
        $this->container['include_zones'] = isset($data['include_zones']) ? $data['include_zones'] : null;
        $this->container['include_zone_names'] = isset($data['include_zone_names']) ? $data['include_zone_names'] : null;
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
     * Gets include_template_name
     * @return bool
     */
    public function getIncludeTemplateName()
    {
        return $this->container['include_template_name'];
    }

    /**
     * Sets include_template_name
     * @param bool $include_template_name 
     * @return $this
     */
    public function setIncludeTemplateName($include_template_name)
    {
        $this->container['include_template_name'] = $include_template_name;

        return $this;
    }

    /**
     * Gets include_template_object
     * @return bool
     */
    public function getIncludeTemplateObject()
    {
        return $this->container['include_template_object'];
    }

    /**
     * Sets include_template_object
     * @param bool $include_template_object 
     * @return $this
     */
    public function setIncludeTemplateObject($include_template_object)
    {
        $this->container['include_template_object'] = $include_template_object;

        return $this;
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
     * Gets include_tag_names
     * @return bool
     */
    public function getIncludeTagNames()
    {
        return $this->container['include_tag_names'];
    }

    /**
     * Sets include_tag_names
     * @param bool $include_tag_names 
     * @return $this
     */
    public function setIncludeTagNames($include_tag_names)
    {
        $this->container['include_tag_names'] = $include_tag_names;

        return $this;
    }

    /**
     * Gets include_zones
     * @return bool
     */
    public function getIncludeZones()
    {
        return $this->container['include_zones'];
    }

    /**
     * Sets include_zones
     * @param bool $include_zones 
     * @return $this
     */
    public function setIncludeZones($include_zones)
    {
        $this->container['include_zones'] = $include_zones;

        return $this;
    }

    /**
     * Gets include_zone_names
     * @return bool
     */
    public function getIncludeZoneNames()
    {
        return $this->container['include_zone_names'];
    }

    /**
     * Sets include_zone_names
     * @param bool $include_zone_names 
     * @return $this
     */
    public function setIncludeZoneNames($include_zone_names)
    {
        $this->container['include_zone_names'] = $include_zone_names;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


