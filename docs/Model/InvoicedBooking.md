# # InvoicedBooking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**invoiceNumber** | **int** |  | [optional]
**invoiceType** | **string** |  |
**status** | **string** |  | [optional] [default to 'draft']
**booking** | [**\SynergiTech\Cinolla\Model\InvoicedBookingBooking**](InvoicedBookingBooking.md) |  |
**totalNet** | **string** |  | [optional]
**totalGross** | **string** |  |
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |
**invoiceDate** | **\DateTime** |  |
**invoiceDue** | **\DateTime** |  |
**type** | **string** |  | [optional]
**deliveryAddressAddress1** | **string** |  | [optional]
**deliveryAddressAddress2** | **string** |  | [optional]
**deliveryAddressTown** | **string** |  | [optional]
**deliveryAddressCounty** | **string** |  | [optional]
**deliveryAddressPostcode** | **string** |  | [optional]
**deliveryAddressCountry** | **string** |  | [optional]
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
**invoicedBookingLineItems** | [**\SynergiTech\Cinolla\Model\InvoicedBookingLineItem[]**](InvoicedBookingLineItem.md) |  |
**invoicedBookingDeposit** | [**\SynergiTech\Cinolla\Model\InvoicedBookingInvoicedBookingDeposit**](InvoicedBookingInvoicedBookingDeposit.md) |  | [optional]
**outstandingAmount** | **string** |  | [optional]
**contact** | [**\SynergiTech\Cinolla\Model\InvoicedBookingContact**](InvoicedBookingContact.md) |  | [optional]
**organisation** | [**\SynergiTech\Cinolla\Model\InvoicedBookingOrganisation**](InvoicedBookingOrganisation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
