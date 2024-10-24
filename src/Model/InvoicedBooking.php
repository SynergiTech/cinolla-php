<?php
/**
 * InvoicedBooking
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
 * Generator version: 7.8.0-SNAPSHOT
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
 * InvoicedBooking Class Doc Comment
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class InvoicedBooking implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InvoicedBooking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'invoiceNumber' => 'int',
        'invoiceType' => 'string',
        'status' => 'string',
        'booking' => '\SynergiTech\Cinolla\Model\InvoicedBookingBooking',
        'totalNet' => 'string',
        'totalGross' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'invoiceDate' => '\DateTime',
        'invoiceDue' => '\DateTime',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'invoiceNumber' => null,
        'invoiceType' => null,
        'status' => null,
        'booking' => null,
        'totalNet' => null,
        'totalGross' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'invoiceDate' => 'date-time',
        'invoiceDue' => 'date-time',
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'invoiceNumber' => true,
        'invoiceType' => false,
        'status' => true,
        'booking' => false,
        'totalNet' => true,
        'totalGross' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'invoiceDate' => false,
        'invoiceDue' => false,
        'type' => true
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
        'invoiceNumber' => 'invoiceNumber',
        'invoiceType' => 'invoiceType',
        'status' => 'status',
        'booking' => 'booking',
        'totalNet' => 'totalNet',
        'totalGross' => 'totalGross',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'invoiceDate' => 'invoiceDate',
        'invoiceDue' => 'invoiceDue',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'invoiceNumber' => 'setInvoiceNumber',
        'invoiceType' => 'setInvoiceType',
        'status' => 'setStatus',
        'booking' => 'setBooking',
        'totalNet' => 'setTotalNet',
        'totalGross' => 'setTotalGross',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceDue' => 'setInvoiceDue',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'invoiceNumber' => 'getInvoiceNumber',
        'invoiceType' => 'getInvoiceType',
        'status' => 'getStatus',
        'booking' => 'getBooking',
        'totalNet' => 'getTotalNet',
        'totalGross' => 'getTotalGross',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceDue' => 'getInvoiceDue',
        'type' => 'getType'
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

    public const INVOICE_TYPE_STANDARD = 'standard';
    public const INVOICE_TYPE_DEPOSIT = 'deposit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_STANDARD,
            self::INVOICE_TYPE_DEPOSIT,
        ];
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('invoiceNumber', $data ?? [], null);
        $this->setIfExists('invoiceType', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 'draft');
        $this->setIfExists('booking', $data ?? [], null);
        $this->setIfExists('totalNet', $data ?? [], null);
        $this->setIfExists('totalGross', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('invoiceDate', $data ?? [], null);
        $this->setIfExists('invoiceDue', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
        if ($this->container['invoiceType'] === null) {
            $invalidProperties[] = "'invoiceType' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($this->container['invoiceType']) && !in_array($this->container['invoiceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'invoiceType', must be one of '%s'",
                $this->container['invoiceType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['booking'] === null) {
            $invalidProperties[] = "'booking' can't be null";
        }
        if ($this->container['totalGross'] === null) {
            $invalidProperties[] = "'totalGross' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['invoiceDate'] === null) {
            $invalidProperties[] = "'invoiceDate' can't be null";
        }
        if ($this->container['invoiceDue'] === null) {
            $invalidProperties[] = "'invoiceDue' can't be null";
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
     * Gets invoiceNumber
     *
     * @return int|null
     */
    public function getInvoiceNumber(): ?int
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param int|null $invoiceNumber invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber(?int $invoiceNumber): static
    {
        if (is_null($invoiceNumber)) {
            array_push($this->openAPINullablesSetToNull, 'invoiceNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoiceNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string
     */
    public function getInvoiceType(): string
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string $invoiceType invoiceType
     *
     * @return $this
     */
    public function setInvoiceType(string $invoiceType): static
    {
        if (is_null($invoiceType)) {
            throw new InvalidArgumentException('non-nullable invoiceType cannot be null');
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($invoiceType, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'invoiceType', must be one of '%s'",
                    $invoiceType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets booking
     *
     * @return \SynergiTech\Cinolla\Model\InvoicedBookingBooking
     */
    public function getBooking(): \SynergiTech\Cinolla\Model\InvoicedBookingBooking
    {
        return $this->container['booking'];
    }

    /**
     * Sets booking
     *
     * @param \SynergiTech\Cinolla\Model\InvoicedBookingBooking $booking booking
     *
     * @return $this
     */
    public function setBooking(\SynergiTech\Cinolla\Model\InvoicedBookingBooking $booking): static
    {
        if (is_null($booking)) {
            throw new InvalidArgumentException('non-nullable booking cannot be null');
        }
        $this->container['booking'] = $booking;

        return $this;
    }

    /**
     * Gets totalNet
     *
     * @return string|null
     */
    public function getTotalNet(): ?string
    {
        return $this->container['totalNet'];
    }

    /**
     * Sets totalNet
     *
     * @param string|null $totalNet totalNet
     *
     * @return $this
     */
    public function setTotalNet(?string $totalNet): static
    {
        if (is_null($totalNet)) {
            array_push($this->openAPINullablesSetToNull, 'totalNet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalNet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalNet'] = $totalNet;

        return $this;
    }

    /**
     * Gets totalGross
     *
     * @return string
     */
    public function getTotalGross(): string
    {
        return $this->container['totalGross'];
    }

    /**
     * Sets totalGross
     *
     * @param string $totalGross totalGross
     *
     * @return $this
     */
    public function setTotalGross(string $totalGross): static
    {
        if (is_null($totalGross)) {
            throw new InvalidArgumentException('non-nullable totalGross cannot be null');
        }


        $this->container['totalGross'] = $totalGross;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            throw new InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updatedAt): static
    {
        if (is_null($updatedAt)) {
            throw new InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return \DateTime
     */
    public function getInvoiceDate(): \DateTime
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param \DateTime $invoiceDate invoiceDate
     *
     * @return $this
     */
    public function setInvoiceDate(\DateTime $invoiceDate): static
    {
        if (is_null($invoiceDate)) {
            throw new InvalidArgumentException('non-nullable invoiceDate cannot be null');
        }
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceDue
     *
     * @return \DateTime
     */
    public function getInvoiceDue(): \DateTime
    {
        return $this->container['invoiceDue'];
    }

    /**
     * Sets invoiceDue
     *
     * @param \DateTime $invoiceDue invoiceDue
     *
     * @return $this
     */
    public function setInvoiceDue(\DateTime $invoiceDue): static
    {
        if (is_null($invoiceDue)) {
            throw new InvalidArgumentException('non-nullable invoiceDue cannot be null');
        }
        $this->container['invoiceDue'] = $invoiceDue;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

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


