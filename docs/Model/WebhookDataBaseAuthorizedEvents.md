# WebhookDataBaseAuthorizedEvents

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**everything** | **string** | If true, the endpoint will receive all events related to the store. | [optional] [default to 'true']
**specific_events** | **string** | If &#x60;everything&#x60; is false, the specific events that the endpoint is interested in. Current events are: &#x60;InvoiceCreated&#x60;, &#x60;InvoiceReceivedPayment&#x60;, &#x60;InvoiceProcessing&#x60;, &#x60;InvoiceExpired&#x60;, &#x60;InvoiceSettled&#x60;, &#x60;InvoiceInvalid&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

