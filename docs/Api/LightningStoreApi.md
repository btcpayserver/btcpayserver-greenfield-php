# Swagger\Client\LightningStoreApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeLightningNodeApiConnectToNode**](LightningStoreApi.md#storelightningnodeapiconnecttonode) | **POST** /api/v1/stores/{storeId}/lightning/{cryptoCode}/connect | Connect to lightning node
[**storeLightningNodeApiCreateInvoice**](LightningStoreApi.md#storelightningnodeapicreateinvoice) | **POST** /api/v1/stores/{storeId}/lightning/{cryptoCode}/invoices | Create lightning invoice
[**storeLightningNodeApiGetChannels**](LightningStoreApi.md#storelightningnodeapigetchannels) | **GET** /api/v1/stores/{storeId}/lightning/{cryptoCode}/channels | Get channels
[**storeLightningNodeApiGetDepositAddress**](LightningStoreApi.md#storelightningnodeapigetdepositaddress) | **POST** /api/v1/stores/{storeId}/lightning/{cryptoCode}/address | Get deposit address
[**storeLightningNodeApiGetInfo**](LightningStoreApi.md#storelightningnodeapigetinfo) | **GET** /api/v1/stores/{storeId}/lightning/{cryptoCode}/info | Get node information
[**storeLightningNodeApiGetInvoice**](LightningStoreApi.md#storelightningnodeapigetinvoice) | **GET** /api/v1/stores/{storeId}/lightning/{cryptoCode}/invoices/{id} | Get invoice
[**storeLightningNodeApiOpenChannel**](LightningStoreApi.md#storelightningnodeapiopenchannel) | **POST** /api/v1/stores/{storeId}/lightning/{cryptoCode}/channels | Open channel
[**storeLightningNodeApiPayInvoice**](LightningStoreApi.md#storelightningnodeapipayinvoice) | **POST** /api/v1/stores/{storeId}/lightning/{cryptoCode}/invoices/pay | Pay Lightning Invoice

# **storeLightningNodeApiConnectToNode**
> storeLightningNodeApiConnectToNode($body, $crypto_code, $store_id)

Connect to lightning node

Connect to another lightning node.

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectToNodeRequest(); // \Swagger\Client\Model\ConnectToNodeRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query

try {
    $apiInstance->storeLightningNodeApiConnectToNode($body, $crypto_code, $store_id);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiConnectToNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectToNodeRequest**](../Model/ConnectToNodeRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNodeApiCreateInvoice**
> \Swagger\Client\Model\LightningInvoiceData storeLightningNodeApiCreateInvoice($body, $crypto_code, $store_id)

Create lightning invoice

Create a lightning invoice.

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PayLightningInvoiceRequest(); // \Swagger\Client\Model\PayLightningInvoiceRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query

try {
    $result = $apiInstance->storeLightningNodeApiCreateInvoice($body, $crypto_code, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiCreateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PayLightningInvoiceRequest**](../Model/PayLightningInvoiceRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |

### Return type

[**\Swagger\Client\Model\LightningInvoiceData**](../Model/LightningInvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNodeApiGetChannels**
> \Swagger\Client\Model\LightningChannelData[] storeLightningNodeApiGetChannels($crypto_code, $store_id)

Get channels

View information about the current channels of the lightning node

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query

try {
    $result = $apiInstance->storeLightningNodeApiGetChannels($crypto_code, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiGetChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |

### Return type

[**\Swagger\Client\Model\LightningChannelData[]**](../Model/LightningChannelData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNodeApiGetDepositAddress**
> string storeLightningNodeApiGetDepositAddress($crypto_code, $store_id)

Get deposit address

Get an on-chain deposit address for the lightning node

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query

try {
    $result = $apiInstance->storeLightningNodeApiGetDepositAddress($crypto_code, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiGetDepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |

### Return type

**string**

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNodeApiGetInfo**
> \Swagger\Client\Model\LightningNodeInformationData storeLightningNodeApiGetInfo($crypto_code, $store_id)

Get node information

View information about the lightning node

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query

try {
    $result = $apiInstance->storeLightningNodeApiGetInfo($crypto_code, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |

### Return type

[**\Swagger\Client\Model\LightningNodeInformationData**](../Model/LightningNodeInformationData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNodeApiGetInvoice**
> \Swagger\Client\Model\LightningInvoiceData storeLightningNodeApiGetInvoice($crypto_code, $store_id, $id)

Get invoice

View information about the requested lightning invoice

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query
$id = "id_example"; // string | The id of the lightning invoice.

try {
    $result = $apiInstance->storeLightningNodeApiGetInvoice($crypto_code, $store_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiGetInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |
 **id** | **string**| The id of the lightning invoice. |

### Return type

[**\Swagger\Client\Model\LightningInvoiceData**](../Model/LightningInvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNodeApiOpenChannel**
> storeLightningNodeApiOpenChannel($body, $crypto_code, $store_id)

Open channel

Open a channel with another lightning node. You should connect to that node first.

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OpenLightningChannelRequest(); // \Swagger\Client\Model\OpenLightningChannelRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query

try {
    $apiInstance->storeLightningNodeApiOpenChannel($body, $crypto_code, $store_id);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiOpenChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OpenLightningChannelRequest**](../Model/OpenLightningChannelRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLightningNodeApiPayInvoice**
> storeLightningNodeApiPayInvoice($body, $crypto_code, $store_id)

Pay Lightning Invoice

Pay a lightning invoice.

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


$apiInstance = new Swagger\Client\Api\LightningStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PayLightningInvoiceRequest(); // \Swagger\Client\Model\PayLightningInvoiceRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$store_id = "store_id_example"; // string | The store id with the lightning-node configuration to query

try {
    $apiInstance->storeLightningNodeApiPayInvoice($body, $crypto_code, $store_id);
} catch (Exception $e) {
    echo 'Exception when calling LightningStoreApi->storeLightningNodeApiPayInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PayLightningInvoiceRequest**](../Model/PayLightningInvoiceRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **store_id** | **string**| The store id with the lightning-node configuration to query |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

