<?php
/**
 * PaymentAllocation
 *
 * PHP version 8.1
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cinolla Client API
 *
 * Welcome to Cinolla Client API documentation for version 3. Please see below for the available API endpoints and their required parameters and responses. If you have any questions, please contact [support@cinolla.com](mailto:support@cinolla.com).
 *
 * The version of the OpenAPI document: 3.0.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Cinolla\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SynergiTech\Cinolla\ObjectSerializer;

/**
 * PaymentAllocation Class Doc Comment
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PaymentAllocation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PaymentAllocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'invoicedBooking' => '\SynergiTech\Cinolla\Model\PaymentAllocationInvoicedBooking',
        'refund' => '\SynergiTech\Cinolla\Model\PaymentAllocationRefund',
        'allocatedAt' => '\DateTime',
        'allocatedAmount' => 'string',
        'actionGroupId' => 'int',
        'actionType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'invoicedBooking' => null,
        'refund' => null,
        'allocatedAt' => 'date-time',
        'allocatedAmount' => null,
        'actionGroupId' => null,
        'actionType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'invoicedBooking' => true,
        'refund' => true,
        'allocatedAt' => true,
        'allocatedAmount' => true,
        'actionGroupId' => true,
        'actionType' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'invoicedBooking' => 'invoicedBooking',
        'refund' => 'refund',
        'allocatedAt' => 'allocatedAt',
        'allocatedAmount' => 'allocatedAmount',
        'actionGroupId' => 'actionGroupId',
        'actionType' => 'actionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'invoicedBooking' => 'setInvoicedBooking',
        'refund' => 'setRefund',
        'allocatedAt' => 'setAllocatedAt',
        'allocatedAmount' => 'setAllocatedAmount',
        'actionGroupId' => 'setActionGroupId',
        'actionType' => 'setActionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'invoicedBooking' => 'getInvoicedBooking',
        'refund' => 'getRefund',
        'allocatedAt' => 'getAllocatedAt',
        'allocatedAmount' => 'getAllocatedAmount',
        'actionGroupId' => 'getActionGroupId',
        'actionType' => 'getActionType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('invoicedBooking', $data ?? [], null);
        $this->setIfExists('refund', $data ?? [], null);
        $this->setIfExists('allocatedAt', $data ?? [], null);
        $this->setIfExists('allocatedAmount', $data ?? [], null);
        $this->setIfExists('actionGroupId', $data ?? [], null);
        $this->setIfExists('actionType', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId(int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoicedBooking
     *
     * @return \SynergiTech\Cinolla\Model\PaymentAllocationInvoicedBooking|null
     */
    public function getInvoicedBooking(): ?\SynergiTech\Cinolla\Model\PaymentAllocationInvoicedBooking
    {
        return $this->container['invoicedBooking'];
    }

    /**
     * Sets invoicedBooking
     *
     * @param \SynergiTech\Cinolla\Model\PaymentAllocationInvoicedBooking|null $invoicedBooking invoicedBooking
     *
     * @return $this
     */
    public function setInvoicedBooking(?\SynergiTech\Cinolla\Model\PaymentAllocationInvoicedBooking $invoicedBooking): static
    {
        if (is_null($invoicedBooking)) {
            array_push($this->openAPINullablesSetToNull, 'invoicedBooking');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoicedBooking', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoicedBooking'] = $invoicedBooking;

        return $this;
    }

    /**
     * Gets refund
     *
     * @return \SynergiTech\Cinolla\Model\PaymentAllocationRefund|null
     */
    public function getRefund(): ?\SynergiTech\Cinolla\Model\PaymentAllocationRefund
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     *
     * @param \SynergiTech\Cinolla\Model\PaymentAllocationRefund|null $refund refund
     *
     * @return $this
     */
    public function setRefund(?\SynergiTech\Cinolla\Model\PaymentAllocationRefund $refund): static
    {
        if (is_null($refund)) {
            array_push($this->openAPINullablesSetToNull, 'refund');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refund', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refund'] = $refund;

        return $this;
    }

    /**
     * Gets allocatedAt
     *
     * @return \DateTime|null
     */
    public function getAllocatedAt(): ?\DateTime
    {
        return $this->container['allocatedAt'];
    }

    /**
     * Sets allocatedAt
     *
     * @param \DateTime|null $allocatedAt allocatedAt
     *
     * @return $this
     */
    public function setAllocatedAt(?\DateTime $allocatedAt): static
    {
        if (is_null($allocatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'allocatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allocatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allocatedAt'] = $allocatedAt;

        return $this;
    }

    /**
     * Gets allocatedAmount
     *
     * @return string|null
     */
    public function getAllocatedAmount(): ?string
    {
        return $this->container['allocatedAmount'];
    }

    /**
     * Sets allocatedAmount
     *
     * @param string|null $allocatedAmount allocatedAmount
     *
     * @return $this
     */
    public function setAllocatedAmount(?string $allocatedAmount): static
    {
        if (is_null($allocatedAmount)) {
            array_push($this->openAPINullablesSetToNull, 'allocatedAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allocatedAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allocatedAmount'] = $allocatedAmount;

        return $this;
    }

    /**
     * Gets actionGroupId
     *
     * @return int|null
     */
    public function getActionGroupId(): ?int
    {
        return $this->container['actionGroupId'];
    }

    /**
     * Sets actionGroupId
     *
     * @param int|null $actionGroupId actionGroupId
     *
     * @return $this
     */
    public function setActionGroupId(?int $actionGroupId): static
    {
        if (is_null($actionGroupId)) {
            array_push($this->openAPINullablesSetToNull, 'actionGroupId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actionGroupId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['actionGroupId'] = $actionGroupId;

        return $this;
    }

    /**
     * Gets actionType
     *
     * @return string|null
     */
    public function getActionType(): ?string
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param string|null $actionType actionType
     *
     * @return $this
     */
    public function setActionType(?string $actionType): static
    {
        if (is_null($actionType)) {
            array_push($this->openAPINullablesSetToNull, 'actionType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actionType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['actionType'] = $actionType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


