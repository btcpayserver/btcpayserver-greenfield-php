# Swagger\Client\ServerInfoApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serverInfoGetServerInfo**](ServerInfoApi.md#serverinfogetserverinfo) | **GET** /api/v1/server/info | Get server info

# **serverInfoGetServerInfo**
> \Swagger\Client\Model\ApplicationServerInfoData serverInfoGetServerInfo()

Get server info

Information about the server, chains and sync states

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


$apiInstance = new Swagger\Client\Api\ServerInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->serverInfoGetServerInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerInfoApi->serverInfoGetServerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApplicationServerInfoData**](../Model/ApplicationServerInfoData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

