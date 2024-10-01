# SynergiTech\Cinolla\LineItemsApi

All URIs are relative to https://api.prod.cinolla.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLineItems()**](LineItemsApi.md#getLineItems) | **GET** /v3/client/lineitems | Returns a collection of Line Items. |


## `getLineItems()`

```php
getLineItems($offset, $limit, $type, $sellOnPortal): \SynergiTech\Cinolla\Model\LineItem[]
```

Returns a collection of Line Items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results
$type = 'type_example'; // string | Filter by the type of the line item, e.g. course
$sellOnPortal = True; // bool | Filter items to only those marked for sale on the Booking Portal.

try {
    $result = $apiInstance->getLineItems($offset, $limit, $type, $sellOnPortal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->getLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |
| **type** | **string**| Filter by the type of the line item, e.g. course | [optional] |
| **sellOnPortal** | **bool**| Filter items to only those marked for sale on the Booking Portal. | [optional] |

### Return type

[**\SynergiTech\Cinolla\Model\LineItem[]**](../Model/LineItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
