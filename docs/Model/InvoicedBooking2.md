# # InvoicedBooking2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**invoiceNumber** | **int** |  | [optional]
**invoiceType** | **string** |  |
**status** | **string** |  | [optional] [default to 'draft']
**booking** | [**\SynergiTech\Cinolla\Model\InvoicedBooking2Booking**](InvoicedBooking2Booking.md) |  |
**totalNet** | **string** |  | [optional]
**totalGross** | **string** |  |
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |
**invoiceDate** | **\DateTime** |  |
**invoiceDue** | **\DateTime** |  |
**type** | **string** |  | [optional]
**deliveryAddressName** | **string** |  | [optional]
**deliveryAddressOrganisation** | **string** |  | [optional]
**deliveryAddressAddress1** | **string** |  | [optional]
**deliveryAddressAddress2** | **string** |  | [optional]
**deliveryAddressTown** | **string** |  | [optional]
**deliveryAddressCounty** | **string** |  | [optional]
**deliveryAddressPostcode** | **string** |  | [optional]
**deliveryAddressCountry** | **string** |  | [optional]
**billingAddressName** | **string** |  | [optional]
**billingAddressOrganisation** | **string** |  | [optional]
**billingAddressAddress1** | **string** |  | [optional]
**billingAddressAddress2** | **string** |  | [optional]
**billingAddressTown** | **string** |  | [optional]
**billingAddressCounty** | **string** |  | [optional]
**billingAddressPostcode** | **string** |  | [optional]
**billingAddressCountry** | **string** |  | [optional]
**void** | **bool** |  | [optional]
**voidAt** | **\DateTime** |  | [optional]
**reference** | **string** |  | [optional]
**poReference** | **string** |  | [optional]
**invoicedBookingLineItems** | [**\SynergiTech\Cinolla\Model\InvoicedBookingLineItem2[]**](InvoicedBookingLineItem2.md) |  |
**invoicedBookingDeposit** | [**\SynergiTech\Cinolla\Model\InvoicedBooking2InvoicedBookingDeposit**](InvoicedBooking2InvoicedBookingDeposit.md) |  | [optional]
**outstandingAmount** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
