# Swagger\Client\APIKeysApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1ApiKeysApikeyDelete**](APIKeysApi.md#apiv1apikeysapikeydelete) | **DELETE** /api/v1/api-keys/{apikey} | Revoke an API Key
[**apiV1ApiKeysCurrentDelete**](APIKeysApi.md#apiv1apikeyscurrentdelete) | **DELETE** /api/v1/api-keys/current | Revoke the current API Key
[**apiV1ApiKeysCurrentGet**](APIKeysApi.md#apiv1apikeyscurrentget) | **GET** /api/v1/api-keys/current | Get the current API Key information
[**apiV1ApiKeysPost**](APIKeysApi.md#apiv1apikeyspost) | **POST** /api/v1/api-keys | Create a new API Key

# **apiV1ApiKeysApikeyDelete**
> apiV1ApiKeysApikeyDelete($apikey)

Revoke an API Key

Revoke the current API key so that it cannot be used anymore

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


$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apikey = "apikey_example"; // string | The API Key to revoke

try {
    $apiInstance->apiV1ApiKeysApikeyDelete($apikey);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->apiV1ApiKeysApikeyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apikey** | **string**| The API Key to revoke |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ApiKeysCurrentDelete**
> \Swagger\Client\Model\ApiKeyData apiV1ApiKeysCurrentDelete()

Revoke the current API Key

Revoke the current API key so that it cannot be used anymore

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1ApiKeysCurrentDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->apiV1ApiKeysCurrentDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApiKeyData**](../Model/ApiKeyData.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ApiKeysCurrentGet**
> \Swagger\Client\Model\ApiKeyData apiV1ApiKeysCurrentGet()

Get the current API Key information

View information about the current API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV1ApiKeysCurrentGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->apiV1ApiKeysCurrentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApiKeyData**](../Model/ApiKeyData.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ApiKeysPost**
> \Swagger\Client\Model\ApiKeyData apiV1ApiKeysPost($body)

Create a new API Key

Create a new API Key

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


$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->apiV1ApiKeysPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->apiV1ApiKeysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyData**](../Model/ApiKeyData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

