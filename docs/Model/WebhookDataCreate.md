# WebhookDataCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**secret** | **string** | Must be used by the callback receiver to ensure the delivery comes from BTCPay Server. BTCPay Server includes the &#x60;BTCPay-Sig&#x60; HTTP header, whose format is &#x60;sha256&#x3D;HMAC256(UTF8(webhook&#x27;s secret), body)&#x60;. The pattern to authenticate the webhook is similar to [how to secure webhooks in Github](https://docs.github.com/webhooks/securing/). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

