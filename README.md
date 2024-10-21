# Cinolla-PHP

Welcome to Cinolla Client API documentation for version 3. Please see below for the available API endpoints and their required parameters and responses.
If you have any questions, please contact [support@cinolla.com](mailto:support@cinolla.com).


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/synergitech/cinolla-php.git"
    }
  ],
  "require": {
    "synergitech/cinolla-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Cinolla-PHP/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.prod.cinolla.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookingsApi* | [**getBooking**](docs/Api/BookingsApi.md#getbooking) | **GET** /v3/client/bookings/{bookingHash} | Get detail for a single Booking
*BookingsApi* | [**getBookings**](docs/Api/BookingsApi.md#getbookings) | **GET** /v3/client/bookings | Get a collection of Bookings
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /v3/client/contacts/{contactHash} | Get detail for a single Contact
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /v3/client/contacts | Returns a collection of Contacts
*CoursesApi* | [**getCourseRuns**](docs/Api/CoursesApi.md#getcourseruns) | **GET** /v3/client/courses/{id}/course-runs | Returns a collection of Course Runs for a given course
*CoursesApi* | [**getCourses**](docs/Api/CoursesApi.md#getcourses) | **GET** /v3/client/courses | Returns a collection of Courses
*CustomFormsApi* | [**getCustomFormSubmissions**](docs/Api/CustomFormsApi.md#getcustomformsubmissions) | **GET** /v3/client/custom-forms/{customFormHash}/submissions | Get a collection of Custom Form Submissions
*CustomFormsApi* | [**getCustomForms**](docs/Api/CustomFormsApi.md#getcustomforms) | **GET** /v3/client/custom-forms | Get a collection of Custom Forms
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /v3/client/invoices/{id} | Get detail for a single Invoice
*InvoicesApi* | [**getInvoices**](docs/Api/InvoicesApi.md#getinvoices) | **GET** /v3/client/invoices | Get a collection of Invoices
*LineItemsApi* | [**getLineItems**](docs/Api/LineItemsApi.md#getlineitems) | **GET** /v3/client/lineitems | Returns a collection of Line Items.
*PaymentsApi* | [**createPayment**](docs/Api/PaymentsApi.md#createpayment) | **POST** /v3/client/payments | Create a new Payment.
*PaymentsApi* | [**getPayments**](docs/Api/PaymentsApi.md#getpayments) | **GET** /v3/client/payments | Fetch a collection of Payments.

## Models

- [BookingType](docs/Model/BookingType.md)
- [BookingType2](docs/Model/BookingType2.md)
- [ClientBookingCollection](docs/Model/ClientBookingCollection.md)
- [ClientBookingDetail](docs/Model/ClientBookingDetail.md)
- [Contact](docs/Model/Contact.md)
- [Contact2](docs/Model/Contact2.md)
- [CourseRun](docs/Model/CourseRun.md)
- [CourseRunDate](docs/Model/CourseRunDate.md)
- [CustomFieldsData](docs/Model/CustomFieldsData.md)
- [CustomForm](docs/Model/CustomForm.md)
- [CustomFormSubmissions](docs/Model/CustomFormSubmissions.md)
- [InvoicedBooking](docs/Model/InvoicedBooking.md)
- [LineItem](docs/Model/LineItem.md)
- [Payment](docs/Model/Payment.md)
- [Payment2](docs/Model/Payment2.md)

## Authorization

### BearerAuth

- **Type**: Bearer authentication (JWT)


### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0.0`
    - Package version: `2024.09.03`
    - Generator version: `7.8.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
