# PayoutData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the payout | [optional] 
**revision** | **int** | The revision number of the payout. This revision number is incremented when the payout amount or destination is modified before the approval. | [optional] 
**pull_payment_id** | **string** | The id of the pull payment this payout belongs to | [optional] 
**date** | **string** | The creation date of the payout as a unix timestamp | [optional] 
**destination** | **string** | The destination of the payout (can be an address or a BIP21 url) | [optional] 
**amount** | **string** | The amount of the payout in the currency of the pull payment (eg. USD). | [optional] 
**payment_method** | **string** | The payment method of the payout | [optional] 
**payment_method_amount** | **string** | The amount of the payout in the currency of the payment method (eg. BTC). This is only available from the &#x60;AwaitingPayment&#x60; state. | [optional] 
**state** | **string** | The state of the payout (&#x60;AwaitingApproval&#x60;, &#x60;AwaitingPayment&#x60;, &#x60;InProgress&#x60;, &#x60;Completed&#x60;, &#x60;Cancelled&#x60;) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

