<?php
/**
 * InvoicedBookingLineItem2
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
 * InvoicedBookingLineItem2 Class Doc Comment
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class InvoicedBookingLineItem2 implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InvoicedBookingLineItem2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'qty' => 'int',
        'netAmount' => 'string',
        'grossAmount' => 'string',
        'unitPrice' => 'string',
        'unitPriceWithTax' => 'string',
        'taxPercent' => 'string',
        'taxAmount' => 'string',
        'taxCode' => 'string',
        'incomeAllocations' => '\SynergiTech\Cinolla\Model\IncomeCode2[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'qty' => null,
        'netAmount' => null,
        'grossAmount' => null,
        'unitPrice' => null,
        'unitPriceWithTax' => null,
        'taxPercent' => null,
        'taxAmount' => null,
        'taxCode' => null,
        'incomeAllocations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => true,
        'qty' => false,
        'netAmount' => true,
        'grossAmount' => true,
        'unitPrice' => true,
        'unitPriceWithTax' => true,
        'taxPercent' => true,
        'taxAmount' => true,
        'taxCode' => true,
        'incomeAllocations' => true
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
        'name' => 'name',
        'qty' => 'qty',
        'netAmount' => 'netAmount',
        'grossAmount' => 'grossAmount',
        'unitPrice' => 'unitPrice',
        'unitPriceWithTax' => 'unitPriceWithTax',
        'taxPercent' => 'taxPercent',
        'taxAmount' => 'taxAmount',
        'taxCode' => 'taxCode',
        'incomeAllocations' => 'incomeAllocations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'qty' => 'setQty',
        'netAmount' => 'setNetAmount',
        'grossAmount' => 'setGrossAmount',
        'unitPrice' => 'setUnitPrice',
        'unitPriceWithTax' => 'setUnitPriceWithTax',
        'taxPercent' => 'setTaxPercent',
        'taxAmount' => 'setTaxAmount',
        'taxCode' => 'setTaxCode',
        'incomeAllocations' => 'setIncomeAllocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'qty' => 'getQty',
        'netAmount' => 'getNetAmount',
        'grossAmount' => 'getGrossAmount',
        'unitPrice' => 'getUnitPrice',
        'unitPriceWithTax' => 'getUnitPriceWithTax',
        'taxPercent' => 'getTaxPercent',
        'taxAmount' => 'getTaxAmount',
        'taxCode' => 'getTaxCode',
        'incomeAllocations' => 'getIncomeAllocations'
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('qty', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('grossAmount', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('unitPriceWithTax', $data ?? [], null);
        $this->setIfExists('taxPercent', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('taxCode', $data ?? [], null);
        $this->setIfExists('incomeAllocations', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return int|null
     */
    public function getQty(): ?int
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param int|null $qty qty
     *
     * @return $this
     */
    public function setQty(?int $qty): static
    {
        if (is_null($qty)) {
            throw new InvalidArgumentException('non-nullable qty cannot be null');
        }
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets netAmount
     *
     * @return string|null
     */
    public function getNetAmount(): ?string
    {
        return $this->container['netAmount'];
    }

    /**
     * Sets netAmount
     *
     * @param string|null $netAmount netAmount
     *
     * @return $this
     */
    public function setNetAmount(?string $netAmount): static
    {
        if (is_null($netAmount)) {
            array_push($this->openAPINullablesSetToNull, 'netAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('netAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets grossAmount
     *
     * @return string|null
     */
    public function getGrossAmount(): ?string
    {
        return $this->container['grossAmount'];
    }

    /**
     * Sets grossAmount
     *
     * @param string|null $grossAmount grossAmount
     *
     * @return $this
     */
    public function setGrossAmount(?string $grossAmount): static
    {
        if (is_null($grossAmount)) {
            array_push($this->openAPINullablesSetToNull, 'grossAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grossAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['grossAmount'] = $grossAmount;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return string|null
     */
    public function getUnitPrice(): ?string
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param string|null $unitPrice unitPrice
     *
     * @return $this
     */
    public function setUnitPrice(?string $unitPrice): static
    {
        if (is_null($unitPrice)) {
            array_push($this->openAPINullablesSetToNull, 'unitPrice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unitPrice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets unitPriceWithTax
     *
     * @return string|null
     */
    public function getUnitPriceWithTax(): ?string
    {
        return $this->container['unitPriceWithTax'];
    }

    /**
     * Sets unitPriceWithTax
     *
     * @param string|null $unitPriceWithTax unitPriceWithTax
     *
     * @return $this
     */
    public function setUnitPriceWithTax(?string $unitPriceWithTax): static
    {
        if (is_null($unitPriceWithTax)) {
            array_push($this->openAPINullablesSetToNull, 'unitPriceWithTax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unitPriceWithTax', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unitPriceWithTax'] = $unitPriceWithTax;

        return $this;
    }

    /**
     * Gets taxPercent
     *
     * @return string|null
     */
    public function getTaxPercent(): ?string
    {
        return $this->container['taxPercent'];
    }

    /**
     * Sets taxPercent
     *
     * @param string|null $taxPercent taxPercent
     *
     * @return $this
     */
    public function setTaxPercent(?string $taxPercent): static
    {
        if (is_null($taxPercent)) {
            array_push($this->openAPINullablesSetToNull, 'taxPercent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxPercent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxPercent'] = $taxPercent;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return string|null
     */
    public function getTaxAmount(): ?string
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param string|null $taxAmount taxAmount
     *
     * @return $this
     */
    public function setTaxAmount(?string $taxAmount): static
    {
        if (is_null($taxAmount)) {
            array_push($this->openAPINullablesSetToNull, 'taxAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets taxCode
     *
     * @return string|null
     */
    public function getTaxCode(): ?string
    {
        return $this->container['taxCode'];
    }

    /**
     * Sets taxCode
     *
     * @param string|null $taxCode taxCode
     *
     * @return $this
     */
    public function setTaxCode(?string $taxCode): static
    {
        if (is_null($taxCode)) {
            array_push($this->openAPINullablesSetToNull, 'taxCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxCode'] = $taxCode;

        return $this;
    }

    /**
     * Gets incomeAllocations
     *
     * @return \SynergiTech\Cinolla\Model\IncomeCode2[]|null
     */
    public function getIncomeAllocations(): ?array
    {
        return $this->container['incomeAllocations'];
    }

    /**
     * Sets incomeAllocations
     *
     * @param \SynergiTech\Cinolla\Model\IncomeCode2[]|null $incomeAllocations incomeAllocations
     *
     * @return $this
     */
    public function setIncomeAllocations(?array $incomeAllocations): static
    {
        if (is_null($incomeAllocations)) {
            array_push($this->openAPINullablesSetToNull, 'incomeAllocations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('incomeAllocations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['incomeAllocations'] = $incomeAllocations;

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

