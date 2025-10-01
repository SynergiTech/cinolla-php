# # CustomForm2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**hash** | **string** |  | [optional] [default to '']
**name** | **string** |  | [optional] [default to '']
**speciality** | **string** |  | [optional] [default to '']
**membership** | [**\SynergiTech\Cinolla\Model\CustomForm2Membership**](CustomForm2Membership.md) |  | [optional]
**active** | **bool** |  | [optional] [default to true]
**createdAt** | **\DateTime** |  |
**centre** | **object** |  |
**customFormLocation** | [**\SynergiTech\Cinolla\Model\CustomForm2CustomFormLocation**](CustomForm2CustomFormLocation.md) |  | [optional]
**customFormFields** | [**\SynergiTech\Cinolla\Model\CustomFormFields[]**](CustomFormFields.md) |  |
**customFormDisplayFields** | [**\SynergiTech\Cinolla\Model\CustomFields[]**](CustomFields.md) |  |
**customFormWorkflows** | [**\SynergiTech\Cinolla\Model\CustomFormWorkflow[]**](CustomFormWorkflow.md) |  |
**requiresApproval** | **bool** |  | [optional] [default to false]
**requiresApprovalFromDate** | **\DateTime** |  | [optional]
**requiresVisitor** | **bool** |  | [optional] [default to false]
**dataRetentionPeriod** | **int** |  | [optional]
**dataRetentionPeriodBooking** | **int** |  | [optional]
**automaticReturnToForm** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
