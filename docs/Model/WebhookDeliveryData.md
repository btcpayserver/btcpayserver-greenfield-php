# WebhookDeliveryData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the delivery | [optional] 
**timestamp** | [**AllOfWebhookDeliveryDataTimestamp**](AllOfWebhookDeliveryDataTimestamp.md) | Timestamp of when the delivery got broadcasted | [optional] 
**http_code** | **float** | HTTP code received by the remote service, if any. | [optional] 
**error_message** | **string** | User friendly error message, if any. | [optional] 
**status** | **string** | Whether the delivery failed or not (possible values are: &#x60;Failed&#x60;, &#x60;HttpError&#x60;, &#x60;HttpSuccess&#x60;) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

