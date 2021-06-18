# Swagger\Client\StorePaymentMethodsOnChainApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1StoresStoreIdPaymentMethodsOnChainCryptoCodeDelete**](StorePaymentMethodsOnChainApi.md#apiv1storesstoreidpaymentmethodsonchaincryptocodedelete) | **DELETE** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode} | Remove store on-chain payment method
[**storeOnChainPaymentMethodsGetOnChainPaymentMethod**](StorePaymentMethodsOnChainApi.md#storeonchainpaymentmethodsgetonchainpaymentmethod) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode} | Get store on-chain payment method
[**storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview**](StorePaymentMethodsOnChainApi.md#storeonchainpaymentmethodsgetonchainpaymentmethodpreview) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/preview | Preview store on-chain payment method addresses
[**storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview_0**](StorePaymentMethodsOnChainApi.md#storeonchainpaymentmethodsgetonchainpaymentmethodpreview_0) | **POST** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode}/preview | Preview proposed store on-chain payment method addresses
[**storeOnChainPaymentMethodsGetOnChainPaymentMethods**](StorePaymentMethodsOnChainApi.md#storeonchainpaymentmethodsgetonchainpaymentmethods) | **GET** /api/v1/stores/{storeId}/payment-methods/OnChain | Get store on-chain payment methods
[**storeOnChainPaymentMethodsUpdateOnChainPaymentMethod**](StorePaymentMethodsOnChainApi.md#storeonchainpaymentmethodsupdateonchainpaymentmethod) | **PUT** /api/v1/stores/{storeId}/payment-methods/OnChain/{cryptoCode} | Update store on-chain payment method

# **apiV1StoresStoreIdPaymentMethodsOnChainCryptoCodeDelete**
> apiV1StoresStoreIdPaymentMethodsOnChainCryptoCodeDelete($store_id, $crypto_code)

Remove store on-chain payment method

Removes the specified store payment method.

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to update

try {
    $apiInstance->apiV1StoresStoreIdPaymentMethodsOnChainCryptoCodeDelete($store_id, $crypto_code);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsOnChainApi->apiV1StoresStoreIdPaymentMethodsOnChainCryptoCodeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to update |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainPaymentMethodsGetOnChainPaymentMethod**
> \Swagger\Client\Model\OnChainPaymentMethodData storeOnChainPaymentMethodsGetOnChainPaymentMethod($store_id, $crypto_code)

Get store on-chain payment method

View information about the specified payment method

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch

try {
    $result = $apiInstance->storeOnChainPaymentMethodsGetOnChainPaymentMethod($store_id, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsOnChainApi->storeOnChainPaymentMethodsGetOnChainPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |

### Return type

[**\Swagger\Client\Model\OnChainPaymentMethodData**](../Model/OnChainPaymentMethodData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview**
> \Swagger\Client\Model\OnChainPaymentMethodPreviewResultData storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview($store_id, $crypto_code, $offset, $amount)

Preview store on-chain payment method addresses

View addresses of the current payment method of the store

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch
$offset = 1.2; // float | From which index to fetch the addresses
$amount = 1.2; // float | Number of addresses to preview

try {
    $result = $apiInstance->storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview($store_id, $crypto_code, $offset, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsOnChainApi->storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |
 **offset** | **float**| From which index to fetch the addresses | [optional]
 **amount** | **float**| Number of addresses to preview | [optional]

### Return type

[**\Swagger\Client\Model\OnChainPaymentMethodPreviewResultData**](../Model/OnChainPaymentMethodPreviewResultData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview_0**
> \Swagger\Client\Model\OnChainPaymentMethodPreviewResultData storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview_0($body, $store_id, $crypto_code, $offset, $amount)

Preview proposed store on-chain payment method addresses

View addresses of a proposed payment method of the store

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OnChainPaymentMethodData(); // \Swagger\Client\Model\OnChainPaymentMethodData | 
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch
$offset = 1.2; // float | From which index to fetch the addresses
$amount = 1.2; // float | Number of addresses to preview

try {
    $result = $apiInstance->storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview_0($body, $store_id, $crypto_code, $offset, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsOnChainApi->storeOnChainPaymentMethodsGetOnChainPaymentMethodPreview_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OnChainPaymentMethodData**](../Model/OnChainPaymentMethodData.md)|  |
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |
 **offset** | **float**| From which index to fetch the addresses | [optional]
 **amount** | **float**| Number of addresses to preview | [optional]

### Return type

[**\Swagger\Client\Model\OnChainPaymentMethodPreviewResultData**](../Model/OnChainPaymentMethodPreviewResultData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainPaymentMethodsGetOnChainPaymentMethods**
> \Swagger\Client\Model\OnChainPaymentMethodDataList storeOnChainPaymentMethodsGetOnChainPaymentMethods($store_id)

Get store on-chain payment methods

View information about the stores' configured on-chain payment methods

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch

try {
    $result = $apiInstance->storeOnChainPaymentMethodsGetOnChainPaymentMethods($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsOnChainApi->storeOnChainPaymentMethodsGetOnChainPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |

### Return type

[**\Swagger\Client\Model\OnChainPaymentMethodDataList**](../Model/OnChainPaymentMethodDataList.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOnChainPaymentMethodsUpdateOnChainPaymentMethod**
> \Swagger\Client\Model\OnChainPaymentMethodData storeOnChainPaymentMethodsUpdateOnChainPaymentMethod($body, $store_id, $crypto_code)

Update store on-chain payment method

Update the specified store's payment method

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsOnChainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OnChainPaymentMethodData(); // \Swagger\Client\Model\OnChainPaymentMethodData | 
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to update

try {
    $result = $apiInstance->storeOnChainPaymentMethodsUpdateOnChainPaymentMethod($body, $store_id, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsOnChainApi->storeOnChainPaymentMethodsUpdateOnChainPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OnChainPaymentMethodData**](../Model/OnChainPaymentMethodData.md)|  |
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to update |

### Return type

[**\Swagger\Client\Model\OnChainPaymentMethodData**](../Model/OnChainPaymentMethodData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

