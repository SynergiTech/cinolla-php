# # CreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**invoicedBooking** | [**\SynergiTech\Cinolla\Model\CreditNoteInvoicedBooking**](CreditNoteInvoicedBooking.md) |  | [optional]
**creditNoteNumber** | **int** |  |
**creditNoteDate** | **\DateTime** |  |
**totalVatAmount** | **string** |  | [optional]
**totalNet** | **string** |  | [optional]
**totalGross** | **string** |  | [optional]
**billingAddressName** | **string** |  | [optional]
**billingAddressOrganisation** | **string** |  | [optional]
**billingAddressAddress1** | **string** |  | [optional]
**billingAddressAddress2** | **string** |  | [optional]
**billingAddressTown** | **string** |  | [optional]
**billingAddressCounty** | **string** |  | [optional]
**billingAddressPostcode** | **string** |  | [optional]
**billingAddressCountry** | **string** |  | [optional]
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |
**globalReason** | **string** |  | [optional]
**reference** | **string** |  | [optional]
**void** | **bool** |  | [optional] [default to false]
**voidAt** | **\DateTime** |  | [optional]
**version** | **int** |  | [optional]
**creditNoteInvoicedBookingLineItems** | [**\SynergiTech\Cinolla\Model\CreditNoteInvoicedBookingLineItem[]**](CreditNoteInvoicedBookingLineItem.md) |  |
**contact** | [**\SynergiTech\Cinolla\Model\CreditNoteContact**](CreditNoteContact.md) |  | [optional]
**organisation** | [**\SynergiTech\Cinolla\Model\CreditNoteOrganisation**](CreditNoteOrganisation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
