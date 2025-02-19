# SynergiTech\Cinolla\InvoicesApi

All URIs are relative to https://api.prod.cinolla.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /v3/client/invoices/{id} | Get detail for a single Invoice |
| [**getInvoices()**](InvoicesApi.md#getInvoices) | **GET** /v3/client/invoices | Get a collection of Invoices |


## `getInvoice()`

```php
getInvoice($id): \SynergiTech\Cinolla\Model\InvoicedBooking2
```

Get detail for a single Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Cinolla\Model\InvoicedBooking2**](../Model/InvoicedBooking2.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($offset, $limit, $startDate, $endDate, $bookingId, $dateRangeFilter): \SynergiTech\Cinolla\Model\InvoicedBooking[]
```

Get a collection of Invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results
$startDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of a date range. Used in conjunction with endDate to create a date range to filter by.
$endDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of a date range. Used in conjunction with startDate to create a date range to filter by.
$bookingId = 56; // int | Filter invoices based on a specific Booking ID.
$dateRangeFilter = 'invoiceDate'; // string | Used in conjunction with startDate and endDate to filter Invoices.

try {
    $result = $apiInstance->getInvoices($offset, $limit, $startDate, $endDate, $bookingId, $dateRangeFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |
| **startDate** | **\DateTime**| Start date of a date range. Used in conjunction with endDate to create a date range to filter by. | [optional] |
| **endDate** | **\DateTime**| End date of a date range. Used in conjunction with startDate to create a date range to filter by. | [optional] |
| **bookingId** | **int**| Filter invoices based on a specific Booking ID. | [optional] |
| **dateRangeFilter** | **string**| Used in conjunction with startDate and endDate to filter Invoices. | [optional] [default to &#39;invoiceDate&#39;] |

### Return type

[**\SynergiTech\Cinolla\Model\InvoicedBooking[]**](../Model/InvoicedBooking.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
