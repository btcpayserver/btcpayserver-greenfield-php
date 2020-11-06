# Swagger\Client\LightningInternalNodeApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**internalLightningNodeApiConnectToNode**](LightningInternalNodeApi.md#internallightningnodeapiconnecttonode) | **POST** /api/v1/server/lightning/{cryptoCode}/connect | Connect to lightning node
[**internalLightningNodeApiCreateInvoice**](LightningInternalNodeApi.md#internallightningnodeapicreateinvoice) | **POST** /api/v1/server/lightning/{cryptoCode}/invoices | Create lightning invoice
[**internalLightningNodeApiGetChannels**](LightningInternalNodeApi.md#internallightningnodeapigetchannels) | **GET** /api/v1/server/lightning/{cryptoCode}/channels | Get channels
[**internalLightningNodeApiGetDepositAddress**](LightningInternalNodeApi.md#internallightningnodeapigetdepositaddress) | **POST** /api/v1/server/lightning/{cryptoCode}/address | Get deposit address
[**internalLightningNodeApiGetInfo**](LightningInternalNodeApi.md#internallightningnodeapigetinfo) | **GET** /api/v1/server/lightning/{cryptoCode}/info | Get node information
[**internalLightningNodeApiGetInvoice**](LightningInternalNodeApi.md#internallightningnodeapigetinvoice) | **GET** /api/v1/server/lightning/{cryptoCode}/invoices/{id} | Get invoice
[**internalLightningNodeApiOpenChannel**](LightningInternalNodeApi.md#internallightningnodeapiopenchannel) | **POST** /api/v1/server/lightning/{cryptoCode}/channels | Open channel
[**internalLightningNodeApiPayInvoice**](LightningInternalNodeApi.md#internallightningnodeapipayinvoice) | **POST** /api/v1/server/lightning/{cryptoCode}/invoices/pay | Pay Lightning Invoice

# **internalLightningNodeApiConnectToNode**
> internalLightningNodeApiConnectToNode($body, $crypto_code)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectToNodeRequest(); // \Swagger\Client\Model\ConnectToNodeRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query

try {
    $apiInstance->internalLightningNodeApiConnectToNode($body, $crypto_code);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiConnectToNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectToNodeRequest**](../Model/ConnectToNodeRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalLightningNodeApiCreateInvoice**
> \Swagger\Client\Model\LightningInvoiceData internalLightningNodeApiCreateInvoice($body, $crypto_code)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateLightningInvoiceRequest(); // \Swagger\Client\Model\CreateLightningInvoiceRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query

try {
    $result = $apiInstance->internalLightningNodeApiCreateInvoice($body, $crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiCreateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateLightningInvoiceRequest**](../Model/CreateLightningInvoiceRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |

### Return type

[**\Swagger\Client\Model\LightningInvoiceData**](../Model/LightningInvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalLightningNodeApiGetChannels**
> \Swagger\Client\Model\LightningChannelData[] internalLightningNodeApiGetChannels($crypto_code)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query

try {
    $result = $apiInstance->internalLightningNodeApiGetChannels($crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiGetChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |

### Return type

[**\Swagger\Client\Model\LightningChannelData[]**](../Model/LightningChannelData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalLightningNodeApiGetDepositAddress**
> string internalLightningNodeApiGetDepositAddress($crypto_code)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query

try {
    $result = $apiInstance->internalLightningNodeApiGetDepositAddress($crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiGetDepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |

### Return type

**string**

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalLightningNodeApiGetInfo**
> \Swagger\Client\Model\LightningNodeInformationData internalLightningNodeApiGetInfo($crypto_code)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query

try {
    $result = $apiInstance->internalLightningNodeApiGetInfo($crypto_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |

### Return type

[**\Swagger\Client\Model\LightningNodeInformationData**](../Model/LightningNodeInformationData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalLightningNodeApiGetInvoice**
> \Swagger\Client\Model\LightningInvoiceData internalLightningNodeApiGetInvoice($crypto_code, $id)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query
$id = "id_example"; // string | The id of the lightning invoice.

try {
    $result = $apiInstance->internalLightningNodeApiGetInvoice($crypto_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiGetInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |
 **id** | **string**| The id of the lightning invoice. |

### Return type

[**\Swagger\Client\Model\LightningInvoiceData**](../Model/LightningInvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalLightningNodeApiOpenChannel**
> internalLightningNodeApiOpenChannel($body, $crypto_code)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OpenLightningChannelRequest(); // \Swagger\Client\Model\OpenLightningChannelRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query

try {
    $apiInstance->internalLightningNodeApiOpenChannel($body, $crypto_code);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiOpenChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OpenLightningChannelRequest**](../Model/OpenLightningChannelRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalLightningNodeApiPayInvoice**
> internalLightningNodeApiPayInvoice($body, $crypto_code)

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


$apiInstance = new Swagger\Client\Api\LightningInternalNodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PayLightningInvoiceRequest(); // \Swagger\Client\Model\PayLightningInvoiceRequest | 
$crypto_code = "crypto_code_example"; // string | The cryptoCode of the lightning-node to query

try {
    $apiInstance->internalLightningNodeApiPayInvoice($body, $crypto_code);
} catch (Exception $e) {
    echo 'Exception when calling LightningInternalNodeApi->internalLightningNodeApiPayInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PayLightningInvoiceRequest**](../Model/PayLightningInvoiceRequest.md)|  |
 **crypto_code** | **string**| The cryptoCode of the lightning-node to query |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

