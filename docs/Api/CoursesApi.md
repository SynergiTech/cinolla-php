# SynergiTech\Cinolla\CoursesApi

All URIs are relative to https://api.prod.cinolla.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCourseRuns()**](CoursesApi.md#getCourseRuns) | **GET** /v3/client/courses/{id}/course-runs | Returns a collection of Course Runs for a given course |
| [**getCourses()**](CoursesApi.md#getCourses) | **GET** /v3/client/courses | Returns a collection of Courses |


## `getCourseRuns()`

```php
getCourseRuns($id, $offset, $limit, $startDate, $endDate, $sellOnPortal): \SynergiTech\Cinolla\Model\CourseRun[]
```

Returns a collection of Course Runs for a given course

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of a date range. Used in conjunction with endDate to create a date range to filter by.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date of a date range. Used in conjunction with startDate to create a date range to filter by.
$sellOnPortal = True; // bool | Filter items to only those marked for sale on the Booking Portal.

try {
    $result = $apiInstance->getCourseRuns($id, $offset, $limit, $startDate, $endDate, $sellOnPortal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCourseRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |
| **startDate** | **\DateTime**| Start date of a date range. Used in conjunction with endDate to create a date range to filter by. | [optional] |
| **endDate** | **\DateTime**| End date of a date range. Used in conjunction with startDate to create a date range to filter by. | [optional] |
| **sellOnPortal** | **bool**| Filter items to only those marked for sale on the Booking Portal. | [optional] |

### Return type

[**\SynergiTech\Cinolla\Model\CourseRun[]**](../Model/CourseRun.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourses()`

```php
getCourses($offset, $limit, $sellOnPortal): \SynergiTech\Cinolla\Model\LineItem[]
```

Returns a collection of Courses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Cinolla\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SynergiTech\Cinolla\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | An offset to return a paginated list of results
$limit = 100; // int | The limit on the number of results
$sellOnPortal = True; // bool | Filter items to only those marked for sale on the Booking Portal.

try {
    $result = $apiInstance->getCourses($offset, $limit, $sellOnPortal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCourses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| An offset to return a paginated list of results | [optional] [default to 0] |
| **limit** | **int**| The limit on the number of results | [optional] [default to 100] |
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
