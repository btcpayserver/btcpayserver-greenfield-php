# Swagger\Client\NotificationsCurrentUserApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationsDeleteNotification**](NotificationsCurrentUserApi.md#notificationsdeletenotification) | **DELETE** /api/v1/users/me/notifications/{id} | Remove Notification
[**notificationsGetNotification**](NotificationsCurrentUserApi.md#notificationsgetnotification) | **GET** /api/v1/users/me/notifications/{id} | Get notification
[**notificationsGetNotifications**](NotificationsCurrentUserApi.md#notificationsgetnotifications) | **GET** /api/v1/users/me/notifications | Get notifications
[**notificationsUpdateNotification**](NotificationsCurrentUserApi.md#notificationsupdatenotification) | **PUT** /api/v1/users/me/notifications/{id} | Update notification

# **notificationsDeleteNotification**
> notificationsDeleteNotification($id)

Remove Notification

Removes the specified notification.

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


$apiInstance = new Swagger\Client\Api\NotificationsCurrentUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The notification to remove

try {
    $apiInstance->notificationsDeleteNotification($id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsCurrentUserApi->notificationsDeleteNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The notification to remove |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsGetNotification**
> \Swagger\Client\Model\NotificationData notificationsGetNotification($id)

Get notification

View information about the specified notification

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


$apiInstance = new Swagger\Client\Api\NotificationsCurrentUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The notification to fetch

try {
    $result = $apiInstance->notificationsGetNotification($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsCurrentUserApi->notificationsGetNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The notification to fetch |

### Return type

[**\Swagger\Client\Model\NotificationData**](../Model/NotificationData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsGetNotifications**
> \Swagger\Client\Model\NotificationData notificationsGetNotifications($seen)

Get notifications

View current user's notifications

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


$apiInstance = new Swagger\Client\Api\NotificationsCurrentUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seen = "seen_example"; // string | filter by seen notifications

try {
    $result = $apiInstance->notificationsGetNotifications($seen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsCurrentUserApi->notificationsGetNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seen** | **string**| filter by seen notifications | [optional]

### Return type

[**\Swagger\Client\Model\NotificationData**](../Model/NotificationData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsUpdateNotification**
> \Swagger\Client\Model\NotificationData notificationsUpdateNotification($body, $id)

Update notification

Updates the notification

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


$apiInstance = new Swagger\Client\Api\NotificationsCurrentUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateNotification(); // \Swagger\Client\Model\UpdateNotification | 
$id = "id_example"; // string | The notification to update

try {
    $result = $apiInstance->notificationsUpdateNotification($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsCurrentUserApi->notificationsUpdateNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateNotification**](../Model/UpdateNotification.md)|  |
 **id** | **string**| The notification to update |

### Return type

[**\Swagger\Client\Model\NotificationData**](../Model/NotificationData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

