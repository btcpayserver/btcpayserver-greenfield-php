# Swagger\Client\AuthorizationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiKeysAuthorizeGet**](AuthorizationApi.md#apikeysauthorizeget) | **GET** /api-keys/authorize | Authorize User

# **apiKeysAuthorizeGet**
> apiKeysAuthorizeGet($permissions, $application_name, $strict, $selective_stores, $redirect, $application_identifier)

Authorize User

Redirect the browser to this endpoint to request the user to generate an api-key with specific permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$permissions = array("permissions_example"); // string[] | The permissions to request. (See API Key authentication)
$application_name = "application_name_example"; // string | The name of your application
$strict = true; // bool | If permissions are specified, and strict is set to false, it will allow the user to reject some of permissions the application is requesting.
$selective_stores = false; // bool | If the application is requesting the CanModifyStoreSettings permission and selectiveStores is set to true, this allows the user to only grant permissions to selected stores under the user's control.
$redirect = "redirect_example"; // string | The url to redirect to after the user consents, with the query parameters appended to it: permissions, user-id, api-key. If not specified, user is redirected to their API Key list.
$application_identifier = "application_identifier_example"; // string | If specified, BTCPay Server will check if there is an existing API key associated with the user that also has this application identifier, redirect host AND the permissions required match(takes selectiveStores and strict into account). `applicationIdentifier` is ignored if redirect is not specified.

try {
    $apiInstance->apiKeysAuthorizeGet($permissions, $application_name, $strict, $selective_stores, $redirect, $application_identifier);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->apiKeysAuthorizeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permissions** | [**string[]**](../Model/string.md)| The permissions to request. (See API Key authentication) | [optional]
 **application_name** | **string**| The name of your application | [optional]
 **strict** | **bool**| If permissions are specified, and strict is set to false, it will allow the user to reject some of permissions the application is requesting. | [optional] [default to true]
 **selective_stores** | **bool**| If the application is requesting the CanModifyStoreSettings permission and selectiveStores is set to true, this allows the user to only grant permissions to selected stores under the user&#x27;s control. | [optional] [default to false]
 **redirect** | **string**| The url to redirect to after the user consents, with the query parameters appended to it: permissions, user-id, api-key. If not specified, user is redirected to their API Key list. | [optional]
 **application_identifier** | **string**| If specified, BTCPay Server will check if there is an existing API key associated with the user that also has this application identifier, redirect host AND the permissions required match(takes selectiveStores and strict into account). &#x60;applicationIdentifier&#x60; is ignored if redirect is not specified. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

