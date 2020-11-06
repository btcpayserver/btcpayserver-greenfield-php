# Swagger\Client\UsersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1UsersPost**](UsersApi.md#apiv1userspost) | **POST** /api/v1/users | Create user
[**usersGetCurrentUser**](UsersApi.md#usersgetcurrentuser) | **GET** /api/v1/users/me | Get current user information

# **apiV1UsersPost**
> \Swagger\Client\Model\ApplicationUserData apiV1UsersPost($body)

Create user

Create a new user.  This operation can be called without authentication in any of this cases: * There is not any administrator yet on the server, * The subscriptions are not disabled in the server's policies.  If the first administrator is created by this call, subscriptions are automatically disabled.

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


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

try {
    $result = $apiInstance->apiV1UsersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiV1UsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)|  |

### Return type

[**\Swagger\Client\Model\ApplicationUserData**](../Model/ApplicationUserData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetCurrentUser**
> \Swagger\Client\Model\ApplicationUserData usersGetCurrentUser()

Get current user information

View information about the current user

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


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersGetCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApplicationUserData**](../Model/ApplicationUserData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

