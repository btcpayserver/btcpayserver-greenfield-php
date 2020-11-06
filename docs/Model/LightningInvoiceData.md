# LightningInvoiceData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The invoice&#x27;s ID | [optional] 
**status** | [**\Swagger\Client\Model\LightningInvoiceStatus**](LightningInvoiceStatus.md) |  | [optional] 
**bolt11** | **string** | The BOLT11 representation of the invoice | [optional] 
**paid_at** | **int** | The unix timestamp when the invoice got paid | [optional] 
**expires_at** | **int** | The unix timestamp when the invoice expires | [optional] 
**amount** | **string** | The amount of the invoice in millisatoshi | [optional] 
**amount_received** | **string** | The amount received in millisatoshi | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

