<?php
/**
 * InvoicedBooking2Booking
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
 * InvoicedBooking2Booking Class Doc Comment
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class InvoicedBooking2Booking implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InvoicedBooking2_booking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'reference' => 'string',
        'hash' => 'string',
        'contact' => '\SynergiTech\Cinolla\Model\InvoicedBooking2Contact',
        'organisation' => '\SynergiTech\Cinolla\Model\InvoicedBooking2Organisation',
        'status' => 'string',
        'totalCost' => 'string',
        'netCost' => 'string',
        'createdAt' => '\DateTime',
        'arrivalDate' => '\DateTime',
        'departureDate' => '\DateTime',
        'origin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'reference' => null,
        'hash' => null,
        'contact' => null,
        'organisation' => null,
        'status' => null,
        'totalCost' => null,
        'netCost' => null,
        'createdAt' => 'date-time',
        'arrivalDate' => 'date-time',
        'departureDate' => 'date-time',
        'origin' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'reference' => true,
        'hash' => true,
        'contact' => true,
        'organisation' => true,
        'status' => false,
        'totalCost' => true,
        'netCost' => true,
        'createdAt' => true,
        'arrivalDate' => true,
        'departureDate' => true,
        'origin' => true
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
        'reference' => 'reference',
        'hash' => 'hash',
        'contact' => 'contact',
        'organisation' => 'organisation',
        'status' => 'status',
        'totalCost' => 'totalCost',
        'netCost' => 'netCost',
        'createdAt' => 'createdAt',
        'arrivalDate' => 'arrivalDate',
        'departureDate' => 'departureDate',
        'origin' => 'origin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'reference' => 'setReference',
        'hash' => 'setHash',
        'contact' => 'setContact',
        'organisation' => 'setOrganisation',
        'status' => 'setStatus',
        'totalCost' => 'setTotalCost',
        'netCost' => 'setNetCost',
        'createdAt' => 'setCreatedAt',
        'arrivalDate' => 'setArrivalDate',
        'departureDate' => 'setDepartureDate',
        'origin' => 'setOrigin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'reference' => 'getReference',
        'hash' => 'getHash',
        'contact' => 'getContact',
        'organisation' => 'getOrganisation',
        'status' => 'getStatus',
        'totalCost' => 'getTotalCost',
        'netCost' => 'getNetCost',
        'createdAt' => 'getCreatedAt',
        'arrivalDate' => 'getArrivalDate',
        'departureDate' => 'getDepartureDate',
        'origin' => 'getOrigin'
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

    public const STATUS_QUOTE = 'quote';
    public const STATUS_DRAFT = 'draft';
    public const STATUS_CONFIRMED = 'confirmed';
    public const STATUS_CANCELLED = 'cancelled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUOTE,
            self::STATUS_DRAFT,
            self::STATUS_CONFIRMED,
            self::STATUS_CANCELLED,
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('organisation', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('totalCost', $data ?? [], null);
        $this->setIfExists('netCost', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('arrivalDate', $data ?? [], null);
        $this->setIfExists('departureDate', $data ?? [], null);
        $this->setIfExists('origin', $data ?? [], null);
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets reference
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            array_push($this->openAPINullablesSetToNull, 'reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash hash
     *
     * @return $this
     */
    public function setHash(?string $hash): static
    {
        if (is_null($hash)) {
            array_push($this->openAPINullablesSetToNull, 'hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \SynergiTech\Cinolla\Model\InvoicedBooking2Contact|null
     */
    public function getContact(): ?\SynergiTech\Cinolla\Model\InvoicedBooking2Contact
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SynergiTech\Cinolla\Model\InvoicedBooking2Contact|null $contact contact
     *
     * @return $this
     */
    public function setContact(?\SynergiTech\Cinolla\Model\InvoicedBooking2Contact $contact): static
    {
        if (is_null($contact)) {
            array_push($this->openAPINullablesSetToNull, 'contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets organisation
     *
     * @return \SynergiTech\Cinolla\Model\InvoicedBooking2Organisation|null
     */
    public function getOrganisation(): ?\SynergiTech\Cinolla\Model\InvoicedBooking2Organisation
    {
        return $this->container['organisation'];
    }

    /**
     * Sets organisation
     *
     * @param \SynergiTech\Cinolla\Model\InvoicedBooking2Organisation|null $organisation organisation
     *
     * @return $this
     */
    public function setOrganisation(?\SynergiTech\Cinolla\Model\InvoicedBooking2Organisation $organisation): static
    {
        if (is_null($organisation)) {
            array_push($this->openAPINullablesSetToNull, 'organisation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organisation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organisation'] = $organisation;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus(string $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets totalCost
     *
     * @return string|null
     */
    public function getTotalCost(): ?string
    {
        return $this->container['totalCost'];
    }

    /**
     * Sets totalCost
     *
     * @param string|null $totalCost totalCost
     *
     * @return $this
     */
    public function setTotalCost(?string $totalCost): static
    {
        if (is_null($totalCost)) {
            array_push($this->openAPINullablesSetToNull, 'totalCost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalCost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalCost'] = $totalCost;

        return $this;
    }

    /**
     * Gets netCost
     *
     * @return string|null
     */
    public function getNetCost(): ?string
    {
        return $this->container['netCost'];
    }

    /**
     * Sets netCost
     *
     * @param string|null $netCost netCost
     *
     * @return $this
     */
    public function setNetCost(?string $netCost): static
    {
        if (is_null($netCost)) {
            array_push($this->openAPINullablesSetToNull, 'netCost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('netCost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['netCost'] = $netCost;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            array_push($this->openAPINullablesSetToNull, 'createdAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('createdAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets arrivalDate
     *
     * @return \DateTime|null
     */
    public function getArrivalDate(): ?\DateTime
    {
        return $this->container['arrivalDate'];
    }

    /**
     * Sets arrivalDate
     *
     * @param \DateTime|null $arrivalDate arrivalDate
     *
     * @return $this
     */
    public function setArrivalDate(?\DateTime $arrivalDate): static
    {
        if (is_null($arrivalDate)) {
            array_push($this->openAPINullablesSetToNull, 'arrivalDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('arrivalDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['arrivalDate'] = $arrivalDate;

        return $this;
    }

    /**
     * Gets departureDate
     *
     * @return \DateTime|null
     */
    public function getDepartureDate(): ?\DateTime
    {
        return $this->container['departureDate'];
    }

    /**
     * Sets departureDate
     *
     * @param \DateTime|null $departureDate departureDate
     *
     * @return $this
     */
    public function setDepartureDate(?\DateTime $departureDate): static
    {
        if (is_null($departureDate)) {
            array_push($this->openAPINullablesSetToNull, 'departureDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('departureDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['departureDate'] = $departureDate;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string|null $origin origin
     *
     * @return $this
     */
    public function setOrigin(?string $origin): static
    {
        if (is_null($origin)) {
            array_push($this->openAPINullablesSetToNull, 'origin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('origin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['origin'] = $origin;

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


