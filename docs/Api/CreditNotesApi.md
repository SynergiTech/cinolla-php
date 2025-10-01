# SynergiTech\Cinolla\CreditNotesApi

All URIs are relative to https://api.prod.cinolla.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCreditNote()**](CreditNotesApi.md#getCreditNote) | **GET** /v3/client/credit-notes/{id} | Get detail for a single Credit Note |
| [**getCreditNoteDocuments()**](CreditNotesApi.md#getCreditNoteDocuments) | **GET** /v3/client/credit-notes/{id}/documents | Get documents for a Credit Note |
| [**getCreditNotes()**](CreditNotesApi.md#getCreditNotes) | **GET** /v3/client/credit-notes | Get a collection of Credit Notes |


## `getCreditNote()`

```php
getCreditNote($id): \SynergiTech\Cinolla\Model\CreditNote2
```

Get detail for a single Credit Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCreditNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Cinolla\Model\CreditNote2**](../Model/CreditNote2.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNoteDocuments()`

```php
getCreditNoteDocuments($id): \SynergiTech\Cinolla\Model\Document[]
```

Get documents for a Credit Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCreditNoteDocuments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->getCreditNoteDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Cinolla\Model\Document[]**](../Model/Document.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNotes()`

```php
getCreditNotes($offset, $limit, $startDate, $endDate, $bookingId, $dateRangeFilter): \SynergiTech\Cinolla\Model\CreditNote[]
```

Get a collection of Credit Notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results
$startDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of a date range. Used in conjunction with endDate to create a date range to filter by.
$endDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of a date range. Used in conjunction with startDate to create a date range to filter by.
$bookingId = 'bookingId_example'; // string | Filter Credit Notes based on a specific Booking ID (or hash).
$dateRangeFilter = 'creditNoteDate'; // string | Used in conjunction with startDate and endDate to filter Credit Notes.

try {
    $result = $apiInstance->getCreditNotes($offset, $limit, $startDate, $endDate, $bookingId, $dateRangeFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->getCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |
| **startDate** | **\DateTime**| Start date of a date range. Used in conjunction with endDate to create a date range to filter by. | [optional] |
| **endDate** | **\DateTime**| End date of a date range. Used in conjunction with startDate to create a date range to filter by. | [optional] |
| **bookingId** | **string**| Filter Credit Notes based on a specific Booking ID (or hash). | [optional] |
| **dateRangeFilter** | **string**| Used in conjunction with startDate and endDate to filter Credit Notes. | [optional] [default to &#39;creditNoteDate&#39;] |

### Return type

[**\SynergiTech\Cinolla\Model\CreditNote[]**](../Model/CreditNote.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
