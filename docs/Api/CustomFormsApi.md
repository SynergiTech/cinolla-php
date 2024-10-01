# SynergiTech\Cinolla\CustomFormsApi

All URIs are relative to https://api.prod.cinolla.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomFormSubmissions()**](CustomFormsApi.md#getCustomFormSubmissions) | **GET** /v3/client/custom-forms/{customFormHash}/submissions | Get a collection of Custom Form Submissions |
| [**getCustomForms()**](CustomFormsApi.md#getCustomForms) | **GET** /v3/client/custom-forms | Get a collection of Custom Forms |


## `getCustomFormSubmissions()`

```php
getCustomFormSubmissions($customFormHash, $offset, $limit, $bookingHash): \SynergiTech\Cinolla\Model\CustomFormSubmissions[]
```

Get a collection of Custom Form Submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\CustomFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customFormHash = 'customFormHash_example'; // string | The hash of a Custom Form
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results
$bookingHash = 'bookingHash_example'; // string | Filter results by a single booking

try {
    $result = $apiInstance->getCustomFormSubmissions($customFormHash, $offset, $limit, $bookingHash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFormsApi->getCustomFormSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customFormHash** | **string**| The hash of a Custom Form | |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |
| **bookingHash** | **string**| Filter results by a single booking | [optional] |

### Return type

[**\SynergiTech\Cinolla\Model\CustomFormSubmissions[]**](../Model/CustomFormSubmissions.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomForms()`

```php
getCustomForms($offset, $limit): \SynergiTech\Cinolla\Model\CustomForm[]
```

Get a collection of Custom Forms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\CustomFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results

try {
    $result = $apiInstance->getCustomForms($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFormsApi->getCustomForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |

### Return type

[**\SynergiTech\Cinolla\Model\CustomForm[]**](../Model/CustomForm.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
