# CreateOnChainTransactionRequestDestination

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination** | **string** | A wallet address or a BIP21 payment link | [optional] 
**amount** | **string** | The amount to send. If &#x60;destination&#x60; is a BIP21 link, the amount must be the same or null. | [optional] 
**subtract_from_amount** | **bool** | Whether to subtract from the provided amount. Must be false if &#x60;destination&#x60; is a BIP21 link | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

