# Swagger\Client\StoreWalletOnChainApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeOnChainWalletsCreateOnChainTransaction**](StoreWalletOnChainApi.md#storeonchainwalletscreateonchaintransaction) | **POST** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet/transactions | Create store on-chain wallet transaction
[**storeOnChainWalletsGetOnChainFeeRate**](StoreWalletOnChainApi.md#storeonchainwalletsgetonchainfeerate) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet/feeRate | Get store on-chain wallet overview
[**storeOnChainWalletsGetOnChainWalletReceiveAddress**](StoreWalletOnChainApi.md#storeonchainwalletsgetonchainwalletreceiveaddress) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet/address | Get store on-chain wallet address
[**storeOnChainWalletsGetOnChainWalletTransaction**](StoreWalletOnChainApi.md#storeonchainwalletsgetonchainwallettransaction) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet/transactions/{transactionId} | Get store on-chain wallet transactions
[**storeOnChainWalletsGetOnChainWalletUTXOs**](StoreWalletOnChainApi.md#storeonchainwalletsgetonchainwalletutxos) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet/utxos | Get store on-chain wallet UTXOS
[**storeOnChainWalletsShowOnChainWalletOverview**](StoreWalletOnChainApi.md#storeonchainwalletsshowonchainwalletoverview) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet | Get store on-chain wallet overview
[**storeOnChainWalletsShowOnChainWalletTransactions**](StoreWalletOnChainApi.md#storeonchainwalletsshowonchainwallettransactions) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet/transactions | Get store on-chain wallet transactions
[**storeOnChainWalletsUnReserveOnChainWalletReceiveAddress**](StoreWalletOnChainApi.md#storeonchainwalletsunreserveonchainwalletreceiveaddress) | **DELETE** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/wallet/address | UnReserve last store on-chain wallet address

# **storeOnChainWalletsCreateOnChainTransaction**
> \Swagger\Client\Model\InlineResponse2001 storeOnChainWalletsCreateOnChainTransaction($body, $store_id, $crypto_code)

Create store on-chain wallet transaction

Create store on-chain wallet transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateOnChainTransactionRequest(); // \Swagger\Client\Model\CreateOnChainTransactionRequest | 
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the wallet

try {
    $result = $apiInstance->storeOnChainWalletsCreateOnChainTransaction($body, $store_id, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsCreateOnChainTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOnChainTransactionRequest**](../Model/CreateOnChainTransactionRequest.md)|  |
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the wallet |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainWalletsGetOnChainFeeRate**
> \Swagger\Client\Model\OnChainWalletFeeRateData storeOnChainWalletsGetOnChainFeeRate($store_id, $crypto_code, $block_target)

Get store on-chain wallet overview

Get wallet onchain fee rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch
$block_target = 1.2; // float | The number of blocks away you are willing to target for confirmation. Defaults to the wallet's configured `RecommendedFeeBlockTarget`

try {
    $result = $apiInstance->storeOnChainWalletsGetOnChainFeeRate($store_id, $crypto_code, $block_target);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsGetOnChainFeeRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |
 **block_target** | **float**| The number of blocks away you are willing to target for confirmation. Defaults to the wallet&#x27;s configured &#x60;RecommendedFeeBlockTarget&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\OnChainWalletFeeRateData**](../Model/OnChainWalletFeeRateData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainWalletsGetOnChainWalletReceiveAddress**
> \Swagger\Client\Model\OnChainWalletAddressData storeOnChainWalletsGetOnChainWalletReceiveAddress($store_id, $crypto_code, $force_generate)

Get store on-chain wallet address

Get or generate address for wallet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch
$force_generate = "force_generate_example"; // string | Whether to generate a new address for this request even if the previous one was not used

try {
    $result = $apiInstance->storeOnChainWalletsGetOnChainWalletReceiveAddress($store_id, $crypto_code, $force_generate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsGetOnChainWalletReceiveAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |
 **force_generate** | **string**| Whether to generate a new address for this request even if the previous one was not used | [optional]

### Return type

[**\Swagger\Client\Model\OnChainWalletAddressData**](../Model/OnChainWalletAddressData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainWalletsGetOnChainWalletTransaction**
> \Swagger\Client\Model\OnChainWalletTransactionData storeOnChainWalletsGetOnChainWalletTransaction($store_id, $crypto_code, $transaction_id)

Get store on-chain wallet transactions

Get store on-chain wallet transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the wallet to fetch
$transaction_id = "transaction_id_example"; // string | The transaction id to fetch

try {
    $result = $apiInstance->storeOnChainWalletsGetOnChainWalletTransaction($store_id, $crypto_code, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsGetOnChainWalletTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the wallet to fetch |
 **transaction_id** | **string**| The transaction id to fetch |

### Return type

[**\Swagger\Client\Model\OnChainWalletTransactionData**](../Model/OnChainWalletTransactionData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainWalletsGetOnChainWalletUTXOs**
> \Swagger\Client\Model\OnChainWalletUTXOData[] storeOnChainWalletsGetOnChainWalletUTXOs($store_id, $crypto_code)

Get store on-chain wallet UTXOS

Get store on-chain wallet utxos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the wallet to fetch

try {
    $result = $apiInstance->storeOnChainWalletsGetOnChainWalletUTXOs($store_id, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsGetOnChainWalletUTXOs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the wallet to fetch |

### Return type

[**\Swagger\Client\Model\OnChainWalletUTXOData[]**](../Model/OnChainWalletUTXOData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainWalletsShowOnChainWalletOverview**
> \Swagger\Client\Model\OnChainWalletOverviewData storeOnChainWalletsShowOnChainWalletOverview($store_id, $crypto_code)

Get store on-chain wallet overview

View information about the specified wallet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch

try {
    $result = $apiInstance->storeOnChainWalletsShowOnChainWalletOverview($store_id, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsShowOnChainWalletOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |

### Return type

[**\Swagger\Client\Model\OnChainWalletOverviewData**](../Model/OnChainWalletOverviewData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainWalletsShowOnChainWalletTransactions**
> \Swagger\Client\Model\OnChainWalletTransactionData[] storeOnChainWalletsShowOnChainWalletTransactions($store_id, $crypto_code, $status_filter)

Get store on-chain wallet transactions

Get store on-chain wallet transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the wallet to fetch
$status_filter = array(new \Swagger\Client\Model\TransactionStatus()); // \Swagger\Client\Model\TransactionStatus[] | statuses to filter the transactions with

try {
    $result = $apiInstance->storeOnChainWalletsShowOnChainWalletTransactions($store_id, $crypto_code, $status_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsShowOnChainWalletTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the wallet to fetch |
 **status_filter** | [**\Swagger\Client\Model\TransactionStatus[]**](../Model/\Swagger\Client\Model\TransactionStatus.md)| statuses to filter the transactions with | [optional]

### Return type

[**\Swagger\Client\Model\OnChainWalletTransactionData[]**](../Model/OnChainWalletTransactionData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainWalletsUnReserveOnChainWalletReceiveAddress**
> storeOnChainWalletsUnReserveOnChainWalletReceiveAddress($store_id, $crypto_code)

UnReserve last store on-chain wallet address

UnReserve address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: Basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StoreWalletOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch

try {
    $apiInstance->storeOnChainWalletsUnReserveOnChainWalletReceiveAddress($store_id, $crypto_code);
} catch (Exception $e) {
    echo 'Exception when calling StoreWalletOnChainApi->storeOnChainWalletsUnReserveOnChainWalletReceiveAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

