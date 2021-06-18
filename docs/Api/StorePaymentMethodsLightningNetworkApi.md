# Swagger\Client\StorePaymentMethodsLightningNetworkApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1StoresStoreIdPaymentMethodsLightningNetworkCryptoCodeDelete**](StorePaymentMethodsLightningNetworkApi.md#apiv1storesstoreidpaymentmethodslightningnetworkcryptocodedelete) | **DELETE** /api/v1/stores/{storeId}/payment-methods/LightningNetwork/{cryptoCode} | Remove store Lightning Network payment method
[**storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethod**](StorePaymentMethodsLightningNetworkApi.md#storelightningnetworkpaymentmethodsgetlightningnetworkpaymentmethod) | **GET** /api/v1/stores/{storeId}/payment-methods/LightningNetwork/{cryptoCode} | Get store Lightning Network payment method
[**storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethods**](StorePaymentMethodsLightningNetworkApi.md#storelightningnetworkpaymentmethodsgetlightningnetworkpaymentmethods) | **GET** /api/v1/stores/{storeId}/payment-methods/LightningNetwork | Get store Lightning Network payment methods
[**storeLightningNetworkPaymentMethodsUpdateLightningNetworkPaymentMethod**](StorePaymentMethodsLightningNetworkApi.md#storelightningnetworkpaymentmethodsupdatelightningnetworkpaymentmethod) | **PUT** /api/v1/stores/{storeId}/payment-methods/LightningNetwork/{cryptoCode} | Update store Lightning Network payment method

# **apiV1StoresStoreIdPaymentMethodsLightningNetworkCryptoCodeDelete**
> apiV1StoresStoreIdPaymentMethodsLightningNetworkCryptoCodeDelete($store_id, $crypto_code)

Remove store Lightning Network payment method

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsLightningNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to update

try {
    $apiInstance->apiV1StoresStoreIdPaymentMethodsLightningNetworkCryptoCodeDelete($store_id, $crypto_code);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsLightningNetworkApi->apiV1StoresStoreIdPaymentMethodsLightningNetworkCryptoCodeDelete: ', $e->getMessage(), PHP_EOL;
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

# **storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethod**
> \Swagger\Client\Model\LightningNetworkPaymentMethodData storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethod($store_id, $crypto_code)

Get store Lightning Network payment method

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsLightningNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to fetch

try {
    $result = $apiInstance->storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethod($store_id, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsLightningNetworkApi->storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to fetch |

### Return type

[**\Swagger\Client\Model\LightningNetworkPaymentMethodData**](../Model/LightningNetworkPaymentMethodData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethods**
> \Swagger\Client\Model\LightningNetworkPaymentMethodDataList storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethods($store_id)

Get store Lightning Network payment methods

View information about the stores' configured Lightning Network payment methods

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsLightningNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch

try {
    $result = $apiInstance->storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethods($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsLightningNetworkApi->storeLightningNetworkPaymentMethodsGetLightningNetworkPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |

### Return type

[**\Swagger\Client\Model\LightningNetworkPaymentMethodDataList**](../Model/LightningNetworkPaymentMethodDataList.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNetworkPaymentMethodsUpdateLightningNetworkPaymentMethod**
> \Swagger\Client\Model\LightningNetworkPaymentMethodData storeLightningNetworkPaymentMethodsUpdateLightningNetworkPaymentMethod($body, $store_id, $crypto_code)

Update store Lightning Network payment method

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


$apiInstance = new Swagger\Client\Api\StorePaymentMethodsLightningNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LightningNetworkPaymentMethodData(); // \Swagger\Client\Model\LightningNetworkPaymentMethodData | 
$store_id = "store_id_example"; // string | The store to fetch
$crypto_code = "crypto_code_example"; // string | The crypto code of the payment method to update

try {
    $result = $apiInstance->storeLightningNetworkPaymentMethodsUpdateLightningNetworkPaymentMethod($body, $store_id, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorePaymentMethodsLightningNetworkApi->storeLightningNetworkPaymentMethodsUpdateLightningNetworkPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LightningNetworkPaymentMethodData**](../Model/LightningNetworkPaymentMethodData.md)|  |
 **store_id** | **string**| The store to fetch |
 **crypto_code** | **string**| The crypto code of the payment method to update |

### Return type

[**\Swagger\Client\Model\LightningNetworkPaymentMethodData**](../Model/LightningNetworkPaymentMethodData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

