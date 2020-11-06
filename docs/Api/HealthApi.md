# Swagger\Client\HealthApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**healthGetHealth**](HealthApi.md#healthgethealth) | **GET** /api/v1/health | Get health status

# **healthGetHealth**
> \Swagger\Client\Model\ApplicationHealthData healthGetHealth()

Get health status

Check the instance health status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthGetHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->healthGetHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApplicationHealthData**](../Model/ApplicationHealthData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

