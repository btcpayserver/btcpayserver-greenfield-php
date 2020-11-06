# Body1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the pull payment | [optional] 
**amount** | **string** | The amount in &#x60;currency&#x60; of this pull payment as a decimal string | [optional] 
**currency** | **string** | The currency of the amount. In this current release, this parameter must be set to a cryptoCode like (&#x60;BTC&#x60;). | [optional] 
**period** | **int** | The length of each period in seconds. | [optional] 
**starts_at** | **int** | The unix timestamp when this pull payment is effective. Starts now if null or unspecified. | [optional] 
**expires_at** | **int** | The unix timestamp when this pull payment is expired. Never expires if null or unspecified. | [optional] 
**payment_methods** | **string[]** | The list of supported payment methods supported. In this current release, this must be set to an array with a single entry equals to &#x60;currency&#x60; (eg. &#x60;[ \&quot;BTC\&quot; ]&#x60;) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

