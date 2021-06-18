# OnChainWalletUTXOData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | A comment linked to this utxo | [optional] 
**amount** | **string** | the value of this utxo | [optional] 
**link** | **string** | a link to the configured blockchain explorer to view the utxo | [optional] 
**outpoint** | **string** | outpoint of this utxo | [optional] 
**timestamp** | [**AllOfOnChainWalletUTXODataTimestamp**](AllOfOnChainWalletUTXODataTimestamp.md) | The time of the utxo | [optional] 
**key_path** | **string** | the derivation path in relation to the HD account | [optional] 
**address** | **string** | The wallet address of this utxo | [optional] 
**confirmations** | **float** | The number of confirmations of this utxo | [optional] 
**labels** | [**map[string,\Swagger\Client\Model\LabelData]**](LabelData.md) | Labels linked to this transaction | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

