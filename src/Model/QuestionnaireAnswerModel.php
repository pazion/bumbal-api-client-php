<?php
/**
 * QuestionnaireAnswerModel
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
 * QuestionnaireAnswerModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuestionnaireAnswerModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QuestionnaireAnswerModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'active' => 'bool',
        'questionnaire_id' => 'int',
        'questionnaire_question_id' => 'int',
        'order' => 'int',
        'question' => 'string',
        'answer' => 'string',
        'chosen_options' => 'int[]',
        'answer_options' => '\BumbalClient\Model\QuestionnaireQuestionOptionModel[]',
        'questionnaire_question_type_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'active' => null,
        'questionnaire_id' => 'int64',
        'questionnaire_question_id' => 'int64',
        'order' => 'int64',
        'question' => 'string',
        'answer' => 'string',
        'chosen_options' => null,
        'answer_options' => null,
        'questionnaire_question_type_name' => 'string'
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
        'id' => 'id',
        'active' => 'active',
        'questionnaire_id' => 'questionnaire_id',
        'questionnaire_question_id' => 'questionnaire_question_id',
        'order' => 'order',
        'question' => 'question',
        'answer' => 'answer',
        'chosen_options' => 'chosen_options',
        'answer_options' => 'answer_options',
        'questionnaire_question_type_name' => 'questionnaire_question_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'active' => 'setActive',
        'questionnaire_id' => 'setQuestionnaireId',
        'questionnaire_question_id' => 'setQuestionnaireQuestionId',
        'order' => 'setOrder',
        'question' => 'setQuestion',
        'answer' => 'setAnswer',
        'chosen_options' => 'setChosenOptions',
        'answer_options' => 'setAnswerOptions',
        'questionnaire_question_type_name' => 'setQuestionnaireQuestionTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'active' => 'getActive',
        'questionnaire_id' => 'getQuestionnaireId',
        'questionnaire_question_id' => 'getQuestionnaireQuestionId',
        'order' => 'getOrder',
        'question' => 'getQuestion',
        'answer' => 'getAnswer',
        'chosen_options' => 'getChosenOptions',
        'answer_options' => 'getAnswerOptions',
        'questionnaire_question_type_name' => 'getQuestionnaireQuestionTypeName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['questionnaire_id'] = isset($data['questionnaire_id']) ? $data['questionnaire_id'] : null;
        $this->container['questionnaire_question_id'] = isset($data['questionnaire_question_id']) ? $data['questionnaire_question_id'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
        $this->container['chosen_options'] = isset($data['chosen_options']) ? $data['chosen_options'] : null;
        $this->container['answer_options'] = isset($data['answer_options']) ? $data['answer_options'] : null;
        $this->container['questionnaire_question_type_name'] = isset($data['questionnaire_question_type_name']) ? $data['questionnaire_question_type_name'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active if active=0: QuestionnaireAnswer has been removed and is no longer visible in any bumbal interface
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets questionnaire_id
     * @return int
     */
    public function getQuestionnaireId()
    {
        return $this->container['questionnaire_id'];
    }

    /**
     * Sets questionnaire_id
     * @param int $questionnaire_id Questionnaire ID
     * @return $this
     */
    public function setQuestionnaireId($questionnaire_id)
    {
        $this->container['questionnaire_id'] = $questionnaire_id;

        return $this;
    }

    /**
     * Gets questionnaire_question_id
     * @return int
     */
    public function getQuestionnaireQuestionId()
    {
        return $this->container['questionnaire_question_id'];
    }

    /**
     * Sets questionnaire_question_id
     * @param int $questionnaire_question_id Questionnaire Question ID
     * @return $this
     */
    public function setQuestionnaireQuestionId($questionnaire_question_id)
    {
        $this->container['questionnaire_question_id'] = $questionnaire_question_id;

        return $this;
    }

    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order Order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets question
     * @return string
     */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
     * Sets question
     * @param string $question Textuale representation of the question
     * @return $this
     */
    public function setQuestion($question)
    {
        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets answer
     * @return string
     */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
     * Sets answer
     * @param string $answer Textuale representation of the answer
     * @return $this
     */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;

        return $this;
    }

    /**
     * Gets chosen_options
     * @return int[]
     */
    public function getChosenOptions()
    {
        return $this->container['chosen_options'];
    }

    /**
     * Sets chosen_options
     * @param int[] $chosen_options Chosen options id's
     * @return $this
     */
    public function setChosenOptions($chosen_options)
    {
        $this->container['chosen_options'] = $chosen_options;

        return $this;
    }

    /**
     * Gets answer_options
     * @return \BumbalClient\Model\QuestionnaireQuestionOptionModel[]
     */
    public function getAnswerOptions()
    {
        return $this->container['answer_options'];
    }

    /**
     * Sets answer_options
     * @param \BumbalClient\Model\QuestionnaireQuestionOptionModel[] $answer_options 
     * @return $this
     */
    public function setAnswerOptions($answer_options)
    {
        $this->container['answer_options'] = $answer_options;

        return $this;
    }

    /**
     * Gets questionnaire_question_type_name
     * @return string
     */
    public function getQuestionnaireQuestionTypeName()
    {
        return $this->container['questionnaire_question_type_name'];
    }

    /**
     * Sets questionnaire_question_type_name
     * @param string $questionnaire_question_type_name Question type name
     * @return $this
     */
    public function setQuestionnaireQuestionTypeName($questionnaire_question_type_name)
    {
        $this->container['questionnaire_question_type_name'] = $questionnaire_question_type_name;

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


