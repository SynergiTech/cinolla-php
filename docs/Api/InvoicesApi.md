# SynergiTech\Cinolla\InvoicesApi

All URIs are relative to https://api.prod.cinolla.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInvoices()**](InvoicesApi.md#getInvoices) | **GET** /v3/client/invoices | Get a collection of Invoices |


## `getInvoices()`

```php
getInvoices($offset, $limit, $startDate, $endDateRange, $bookingId, $dateRangeFilter): \SynergiTech\Cinolla\Model\InvoicedBooking[]
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
$offset = 0; // int | An offset used to return a paginated list of results
$limit = 100; // int | A limit/max on the number of results returned
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of a date range. Used in conjunction with endDate to create a date range to filter by.
$endDateRange = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date of a date range. Used in conjunction with startDate to create a date range to filter by.
$bookingId = 56; // int | Filter invoices based on a specific Booking ID.
$dateRangeFilter = 'invoiceDate'; // string | Used in conjunction with startDate and endDate to filter Invoices.

try {
    $result = $apiInstance->getInvoices($offset, $limit, $startDate, $endDateRange, $bookingId, $dateRangeFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| An offset used to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| A limit/max on the number of results returned | [optional] [default to 100] |
| **startDate** | **\DateTime**| Start date of a date range. Used in conjunction with endDate to create a date range to filter by. | [optional] |
| **endDateRange** | **\DateTime**| End date of a date range. Used in conjunction with startDate to create a date range to filter by. | [optional] |
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
