# InvoicePaymentMethodDataModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method** | **string** | The payment method | [optional] 
**destination** | **string** | The destination the payment must be made to | [optional] 
**payment_link** | **string** | A payment link that helps pay to the payment destination | [optional] 
**rate** | **string** | The rate between this payment method&#x27;s currency and the invoice currency | [optional] 
**payment_method_paid** | **string** | The amount paid by this payment method | [optional] 
**total_paid** | **string** | The total amount paid by all payment methods to the invoice, converted to this payment method&#x27;s currency | [optional] 
**due** | **string** | The total amount left to be paid, converted to this payment method&#x27;s currency | [optional] 
**amount** | **string** | The invoice amount, converted to this payment method&#x27;s currency | [optional] 
**network_fee** | **string** | The added merchant fee to pay for network costs of this payment method. | [optional] 
**payments** | [**\Swagger\Client\Model\Payment[]**](Payment.md) | Payments made with this payment method. | [optional] 
**activated** | **bool** | If the payment method is activated (when lazy payments option is enabled | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

