# CheckoutOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**speed_policy** | [**OneOfCheckoutOptionsSpeedPolicy**](OneOfCheckoutOptionsSpeedPolicy.md) | This is a risk mitigation parameter for the merchant to configure how they want to fulfill orders depending on the number of block confirmations for the transaction made by the consumer on the selected cryptocurrency | [optional] 
**payment_methods** | **string[]** | A specific set of payment methods to use for this invoice (ie. BTC, BTC-LightningNetwork). By default, select all payment methods activated in the store. | [optional] 
**expiration_minutes** | **int** | The number of minutes after which an invoice becomes expired. Default to the store&#x27;s settings. (The default store settings is 15) | [optional] 
**monitoring_minutes** | **int** | The number of minutes after an invoice expired after which we are still monitoring for incoming payments. Default to the store&#x27;s settings. (The default store settings is 1440, 1 day) | [optional] 
**payment_tolerance** | **double** | A percentage determining whether to count the invoice as paid when the invoice is paid within the specified margin of error. Default to the store&#x27;s settings. (The default store settings is 100) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

