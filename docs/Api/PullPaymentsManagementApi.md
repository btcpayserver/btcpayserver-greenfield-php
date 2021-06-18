# Swagger\Client\PullPaymentsManagementApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullPaymentsApprovePayout**](PullPaymentsManagementApi.md#pullpaymentsapprovepayout) | **POST** /api/v1/stores/{storeId}/payouts/{payoutId} | Approve Payout
[**pullPaymentsArchivePullPayment**](PullPaymentsManagementApi.md#pullpaymentsarchivepullpayment) | **DELETE** /api/v1/stores/{storeId}/pull-payments/{pullPaymentId} | Archive a pull payment
[**pullPaymentsCancelPayout**](PullPaymentsManagementApi.md#pullpaymentscancelpayout) | **DELETE** /api/v1/stores/{storeId}/payouts/{payoutId} | Cancel Payout
[**pullPaymentsCreatePullPayment**](PullPaymentsManagementApi.md#pullpaymentscreatepullpayment) | **POST** /api/v1/stores/{storeId}/pull-payments | Create a new pull payment
[**pullPaymentsGetPullPayments**](PullPaymentsManagementApi.md#pullpaymentsgetpullpayments) | **GET** /api/v1/stores/{storeId}/pull-payments | Get store&#x27;s pull payments

# **pullPaymentsApprovePayout**
> \Swagger\Client\Model\PayoutData pullPaymentsApprovePayout($store_id, $payout_id, $body)

Approve Payout

Approve a payout

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


$apiInstance = new Swagger\Client\Api\PullPaymentsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The ID of the store
$payout_id = "payout_id_example"; // string | The ID of the payout
$body = new \Swagger\Client\Model\PayoutsPayoutIdBody(); // \Swagger\Client\Model\PayoutsPayoutIdBody | 

try {
    $result = $apiInstance->pullPaymentsApprovePayout($store_id, $payout_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsManagementApi->pullPaymentsApprovePayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The ID of the store |
 **payout_id** | **string**| The ID of the payout |
 **body** | [**\Swagger\Client\Model\PayoutsPayoutIdBody**](../Model/PayoutsPayoutIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PayoutData**](../Model/PayoutData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullPaymentsArchivePullPayment**
> pullPaymentsArchivePullPayment($store_id, $pull_payment_id)

Archive a pull payment

Archive this pull payment (Will cancel all payouts awaiting for payment)

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


$apiInstance = new Swagger\Client\Api\PullPaymentsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The ID of the store
$pull_payment_id = "pull_payment_id_example"; // string | The ID of the pull payment

try {
    $apiInstance->pullPaymentsArchivePullPayment($store_id, $pull_payment_id);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsManagementApi->pullPaymentsArchivePullPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The ID of the store |
 **pull_payment_id** | **string**| The ID of the pull payment |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullPaymentsCancelPayout**
> pullPaymentsCancelPayout($store_id, $payout_id)

Cancel Payout

Cancel the payout

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


$apiInstance = new Swagger\Client\Api\PullPaymentsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The ID of the store
$payout_id = "payout_id_example"; // string | The ID of the payout

try {
    $apiInstance->pullPaymentsCancelPayout($store_id, $payout_id);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsManagementApi->pullPaymentsCancelPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The ID of the store |
 **payout_id** | **string**| The ID of the payout |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullPaymentsCreatePullPayment**
> \Swagger\Client\Model\PullPaymentData pullPaymentsCreatePullPayment($store_id, $body)

Create a new pull payment

A pull payment allows its receiver to ask for payouts up to `amount` of `currency` every `period`.

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


$apiInstance = new Swagger\Client\Api\PullPaymentsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store ID
$body = new \Swagger\Client\Model\StoreIdPullpaymentsBody(); // \Swagger\Client\Model\StoreIdPullpaymentsBody | 

try {
    $result = $apiInstance->pullPaymentsCreatePullPayment($store_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsManagementApi->pullPaymentsCreatePullPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store ID |
 **body** | [**\Swagger\Client\Model\StoreIdPullpaymentsBody**](../Model/StoreIdPullpaymentsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PullPaymentData**](../Model/PullPaymentData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullPaymentsGetPullPayments**
> \Swagger\Client\Model\PullPaymentDataList pullPaymentsGetPullPayments($store_id, $include_archived)

Get store's pull payments

Get the pull payments of a store

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


$apiInstance = new Swagger\Client\Api\PullPaymentsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store ID
$include_archived = false; // bool | Whether this should list archived pull payments

try {
    $result = $apiInstance->pullPaymentsGetPullPayments($store_id, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsManagementApi->pullPaymentsGetPullPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store ID |
 **include_archived** | **bool**| Whether this should list archived pull payments | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\PullPaymentDataList**](../Model/PullPaymentDataList.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

