# SynergiTech\Cinolla\BookingsApi

All URIs are relative to https://api.prod.cinolla.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBooking()**](BookingsApi.md#getBooking) | **GET** /v3/client/bookings/{bookingHash} | Get detail for a single Booking |
| [**getBookings()**](BookingsApi.md#getBookings) | **GET** /v3/client/bookings | Get a collection of Bookings |


## `getBooking()`

```php
getBooking($bookingHash): \SynergiTech\Cinolla\Model\ClientBookingDetail
```

Get detail for a single Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookingHash = 'bookingHash_example'; // string

try {
    $result = $apiInstance->getBooking($bookingHash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookingHash** | **string**|  | |

### Return type

[**\SynergiTech\Cinolla\Model\ClientBookingDetail**](../Model/ClientBookingDetail.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookings()`

```php
getBookings($startDate, $endDate, $offset, $limit, $dateRangeFilter, $futureOnly, $tags, $tagIds, $tagsOperator, $reference): \SynergiTech\Cinolla\Model\ClientBookingCollection[]
```

Get a collection of Bookings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of a date range. Used in conjunction with endDate to create a date range to filter by.
$endDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of a date range. Used in conjunction with startDate to create a date range to filter by.
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results
$dateRangeFilter = 'arrivalDate'; // string | Used in conjunction with startDate and endDate to filter bookings.
$futureOnly = false; // bool | Filter bookings by future only, based on arrival date being greater than now.
$tags = array('tags_example'); // string[] | Filter bookings by tag name. See tagsOperator.
$tagIds = array(56); // int[] | Filter bookings by tag ID. See tagsOperator.
$tagsOperator = 'all'; // string | Operator for use with tags or tagIds params. If all, bookings must have all given tags. If oneOf, bookings must contain one of the given tags.
$reference = 'reference_example'; // string | Fuzzy match on booking reference, e.g. B-001 will match B-00100, B-00101, B-00102 etc.

try {
    $result = $apiInstance->getBookings($startDate, $endDate, $offset, $limit, $dateRangeFilter, $futureOnly, $tags, $tagIds, $tagsOperator, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **\DateTime**| Start date of a date range. Used in conjunction with endDate to create a date range to filter by. | [optional] |
| **endDate** | **\DateTime**| End date of a date range. Used in conjunction with startDate to create a date range to filter by. | [optional] |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |
| **dateRangeFilter** | **string**| Used in conjunction with startDate and endDate to filter bookings. | [optional] [default to &#39;arrivalDate&#39;] |
| **futureOnly** | **bool**| Filter bookings by future only, based on arrival date being greater than now. | [optional] [default to false] |
| **tags** | [**string[]**](../Model/string.md)| Filter bookings by tag name. See tagsOperator. | [optional] |
| **tagIds** | [**int[]**](../Model/int.md)| Filter bookings by tag ID. See tagsOperator. | [optional] |
| **tagsOperator** | **string**| Operator for use with tags or tagIds params. If all, bookings must have all given tags. If oneOf, bookings must contain one of the given tags. | [optional] [default to &#39;all&#39;] |
| **reference** | **string**| Fuzzy match on booking reference, e.g. B-001 will match B-00100, B-00101, B-00102 etc. | [optional] |

### Return type

[**\SynergiTech\Cinolla\Model\ClientBookingCollection[]**](../Model/ClientBookingCollection.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
