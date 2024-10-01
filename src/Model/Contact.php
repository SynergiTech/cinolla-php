<?php
/**
 * Contact
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
 * Contact Class Doc Comment
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Contact implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'hash' => 'string',
        'customerId' => 'string',
        'title' => 'string',
        'firstName' => 'string',
        'secondName' => 'string',
        'tel' => 'string',
        'eveningTel' => 'string',
        'mobile' => 'string',
        'workTel' => 'string',
        'createdAt' => '\DateTime',
        'defaultBillingAddress' => '\SynergiTech\Cinolla\Model\ContactDefaultBillingAddress',
        'defaultDeliveryAddress' => '\SynergiTech\Cinolla\Model\ContactDefaultBillingAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'hash' => null,
        'customerId' => null,
        'title' => null,
        'firstName' => null,
        'secondName' => null,
        'tel' => null,
        'eveningTel' => null,
        'mobile' => null,
        'workTel' => null,
        'createdAt' => 'date-time',
        'defaultBillingAddress' => null,
        'defaultDeliveryAddress' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'hash' => true,
        'customerId' => true,
        'title' => true,
        'firstName' => true,
        'secondName' => true,
        'tel' => true,
        'eveningTel' => true,
        'mobile' => true,
        'workTel' => true,
        'createdAt' => true,
        'defaultBillingAddress' => true,
        'defaultDeliveryAddress' => true
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
        'hash' => 'hash',
        'customerId' => 'customerId',
        'title' => 'title',
        'firstName' => 'firstName',
        'secondName' => 'secondName',
        'tel' => 'tel',
        'eveningTel' => 'eveningTel',
        'mobile' => 'mobile',
        'workTel' => 'workTel',
        'createdAt' => 'createdAt',
        'defaultBillingAddress' => 'defaultBillingAddress',
        'defaultDeliveryAddress' => 'defaultDeliveryAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'hash' => 'setHash',
        'customerId' => 'setCustomerId',
        'title' => 'setTitle',
        'firstName' => 'setFirstName',
        'secondName' => 'setSecondName',
        'tel' => 'setTel',
        'eveningTel' => 'setEveningTel',
        'mobile' => 'setMobile',
        'workTel' => 'setWorkTel',
        'createdAt' => 'setCreatedAt',
        'defaultBillingAddress' => 'setDefaultBillingAddress',
        'defaultDeliveryAddress' => 'setDefaultDeliveryAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'hash' => 'getHash',
        'customerId' => 'getCustomerId',
        'title' => 'getTitle',
        'firstName' => 'getFirstName',
        'secondName' => 'getSecondName',
        'tel' => 'getTel',
        'eveningTel' => 'getEveningTel',
        'mobile' => 'getMobile',
        'workTel' => 'getWorkTel',
        'createdAt' => 'getCreatedAt',
        'defaultBillingAddress' => 'getDefaultBillingAddress',
        'defaultDeliveryAddress' => 'getDefaultDeliveryAddress'
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
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], '');
        $this->setIfExists('firstName', $data ?? [], '');
        $this->setIfExists('secondName', $data ?? [], '');
        $this->setIfExists('tel', $data ?? [], '');
        $this->setIfExists('eveningTel', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], '');
        $this->setIfExists('workTel', $data ?? [], '');
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('defaultBillingAddress', $data ?? [], null);
        $this->setIfExists('defaultDeliveryAddress', $data ?? [], null);
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
     * Gets customerId
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string|null $customerId customerId
     *
     * @return $this
     */
    public function setCustomerId(?string $customerId): static
    {
        if (is_null($customerId)) {
            array_push($this->openAPINullablesSetToNull, 'customerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return $this
     */
    public function setFirstName(?string $firstName): static
    {
        if (is_null($firstName)) {
            array_push($this->openAPINullablesSetToNull, 'firstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets secondName
     *
     * @return string|null
     */
    public function getSecondName(): ?string
    {
        return $this->container['secondName'];
    }

    /**
     * Sets secondName
     *
     * @param string|null $secondName secondName
     *
     * @return $this
     */
    public function setSecondName(?string $secondName): static
    {
        if (is_null($secondName)) {
            array_push($this->openAPINullablesSetToNull, 'secondName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('secondName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['secondName'] = $secondName;

        return $this;
    }

    /**
     * Gets tel
     *
     * @return string|null
     */
    public function getTel(): ?string
    {
        return $this->container['tel'];
    }

    /**
     * Sets tel
     *
     * @param string|null $tel tel
     *
     * @return $this
     */
    public function setTel(?string $tel): static
    {
        if (is_null($tel)) {
            array_push($this->openAPINullablesSetToNull, 'tel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tel'] = $tel;

        return $this;
    }

    /**
     * Gets eveningTel
     *
     * @return string|null
     */
    public function getEveningTel(): ?string
    {
        return $this->container['eveningTel'];
    }

    /**
     * Sets eveningTel
     *
     * @param string|null $eveningTel eveningTel
     *
     * @return $this
     */
    public function setEveningTel(?string $eveningTel): static
    {
        if (is_null($eveningTel)) {
            array_push($this->openAPINullablesSetToNull, 'eveningTel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eveningTel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eveningTel'] = $eveningTel;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile mobile
     *
     * @return $this
     */
    public function setMobile(?string $mobile): static
    {
        if (is_null($mobile)) {
            array_push($this->openAPINullablesSetToNull, 'mobile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mobile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets workTel
     *
     * @return string|null
     */
    public function getWorkTel(): ?string
    {
        return $this->container['workTel'];
    }

    /**
     * Sets workTel
     *
     * @param string|null $workTel workTel
     *
     * @return $this
     */
    public function setWorkTel(?string $workTel): static
    {
        if (is_null($workTel)) {
            array_push($this->openAPINullablesSetToNull, 'workTel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('workTel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['workTel'] = $workTel;

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
     * Gets defaultBillingAddress
     *
     * @return \SynergiTech\Cinolla\Model\ContactDefaultBillingAddress|null
     */
    public function getDefaultBillingAddress(): ?\SynergiTech\Cinolla\Model\ContactDefaultBillingAddress
    {
        return $this->container['defaultBillingAddress'];
    }

    /**
     * Sets defaultBillingAddress
     *
     * @param \SynergiTech\Cinolla\Model\ContactDefaultBillingAddress|null $defaultBillingAddress defaultBillingAddress
     *
     * @return $this
     */
    public function setDefaultBillingAddress(?\SynergiTech\Cinolla\Model\ContactDefaultBillingAddress $defaultBillingAddress): static
    {
        if (is_null($defaultBillingAddress)) {
            array_push($this->openAPINullablesSetToNull, 'defaultBillingAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('defaultBillingAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['defaultBillingAddress'] = $defaultBillingAddress;

        return $this;
    }

    /**
     * Gets defaultDeliveryAddress
     *
     * @return \SynergiTech\Cinolla\Model\ContactDefaultBillingAddress|null
     */
    public function getDefaultDeliveryAddress(): ?\SynergiTech\Cinolla\Model\ContactDefaultBillingAddress
    {
        return $this->container['defaultDeliveryAddress'];
    }

    /**
     * Sets defaultDeliveryAddress
     *
     * @param \SynergiTech\Cinolla\Model\ContactDefaultBillingAddress|null $defaultDeliveryAddress defaultDeliveryAddress
     *
     * @return $this
     */
    public function setDefaultDeliveryAddress(?\SynergiTech\Cinolla\Model\ContactDefaultBillingAddress $defaultDeliveryAddress): static
    {
        if (is_null($defaultDeliveryAddress)) {
            array_push($this->openAPINullablesSetToNull, 'defaultDeliveryAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('defaultDeliveryAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['defaultDeliveryAddress'] = $defaultDeliveryAddress;

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


