# CreateLightningInvoiceRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount wrapped in a string, represented in a millistatoshi string. (1000 millisatoshi &#x3D; 1 satoshi) | [optional] 
**description** | **string** | Description of the invoice in the BOLT11 | [optional] 
**expiry** | **int** | Expiration time in seconds | [optional] 
**private_route_hints** | **bool** | True if the invoice should include private route hints | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

