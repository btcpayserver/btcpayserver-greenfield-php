# CreateOnChainTransactionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destinations** | [**\Swagger\Client\Model\CreateOnChainTransactionRequestDestination[]**](CreateOnChainTransactionRequestDestination.md) | What and where to send money | [optional] 
**fee_rate** | **float** | A wallet address or a BIP21 payment link | [optional] 
**proceed_with_payjoin** | **bool** | Whether to attempt to do a BIP78 payjoin if one of the destinations is a BIP21 with payjoin enabled | [optional] [default to true]
**proceed_with_broadcast** | **bool** | Whether to broadcast the transaction after creating it or to simply return the transaction in hex format. | [optional] [default to true]
**no_change** | **bool** | Whether to send all the spent coins to the destinations (THIS CAN COST YOU SIGNIFICANT AMOUNTS OF MONEY, LEAVE FALSE UNLESS YOU KNOW WHAT YOU ARE DOING). | [optional] [default to false]
**rbf** | **bool** | Whether to enable RBF for the transaction. Leave blank to have it random (beneficial to privacy) | [optional] 
**selected_inputs** | **string[]** | Restrict the creation of the transactions from the outpoints provided ONLY (coin selection) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

