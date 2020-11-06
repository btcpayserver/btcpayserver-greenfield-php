# Swagger\Client\PaymentRequestsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentRequestsArchivePaymentRequest**](PaymentRequestsApi.md#paymentrequestsarchivepaymentrequest) | **DELETE** /api/v1/stores/{storeId}/payment-requests/{paymentRequestId} | Archive payment request
[**paymentRequestsCreatePaymentRequest**](PaymentRequestsApi.md#paymentrequestscreatepaymentrequest) | **POST** /api/v1/stores/{storeId}/payment-requests | Create a new payment request
[**paymentRequestsGetPaymentRequest**](PaymentRequestsApi.md#paymentrequestsgetpaymentrequest) | **GET** /api/v1/stores/{storeId}/payment-requests/{paymentRequestId} | Get payment request
[**paymentRequestsGetPaymentRequests**](PaymentRequestsApi.md#paymentrequestsgetpaymentrequests) | **GET** /api/v1/stores/{storeId}/payment-requests | Get payment requests
[**paymentRequestsUpdatePaymentRequest**](PaymentRequestsApi.md#paymentrequestsupdatepaymentrequest) | **PUT** /api/v1/stores/{storeId}/payment-requests/{paymentRequestId} | Update payment request

# **paymentRequestsArchivePaymentRequest**
> paymentRequestsArchivePaymentRequest($store_id, $payment_request_id)

Archive payment request

Archives the specified payment request.

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


$apiInstance = new Swagger\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store the payment request belongs to
$payment_request_id = "payment_request_id_example"; // string | The payment request to remove

try {
    $apiInstance->paymentRequestsArchivePaymentRequest($store_id, $payment_request_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->paymentRequestsArchivePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store the payment request belongs to |
 **payment_request_id** | **string**| The payment request to remove |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentRequestsCreatePaymentRequest**
> \Swagger\Client\Model\PaymentRequestData paymentRequestsCreatePaymentRequest($body, $store_id)

Create a new payment request

Create a new payment request

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


$apiInstance = new Swagger\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PaymentRequestBaseData(); // \Swagger\Client\Model\PaymentRequestBaseData | 
$store_id = "store_id_example"; // string | The store to query

try {
    $result = $apiInstance->paymentRequestsCreatePaymentRequest($body, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->paymentRequestsCreatePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentRequestBaseData**](../Model/PaymentRequestBaseData.md)|  |
 **store_id** | **string**| The store to query |

### Return type

[**\Swagger\Client\Model\PaymentRequestData**](../Model/PaymentRequestData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentRequestsGetPaymentRequest**
> \Swagger\Client\Model\PaymentRequestData paymentRequestsGetPaymentRequest($store_id, $payment_request_id)

Get payment request

View information about the specified payment request

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


$apiInstance = new Swagger\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$payment_request_id = "payment_request_id_example"; // string | The payment request to fetch

try {
    $result = $apiInstance->paymentRequestsGetPaymentRequest($store_id, $payment_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->paymentRequestsGetPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **payment_request_id** | **string**| The payment request to fetch |

### Return type

[**\Swagger\Client\Model\PaymentRequestData**](../Model/PaymentRequestData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentRequestsGetPaymentRequests**
> \Swagger\Client\Model\PaymentRequestDataList paymentRequestsGetPaymentRequests($store_id)

Get payment requests

View information about the existing payment requests

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


$apiInstance = new Swagger\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to query

try {
    $result = $apiInstance->paymentRequestsGetPaymentRequests($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->paymentRequestsGetPaymentRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to query |

### Return type

[**\Swagger\Client\Model\PaymentRequestDataList**](../Model/PaymentRequestDataList.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentRequestsUpdatePaymentRequest**
> \Swagger\Client\Model\PaymentRequestData paymentRequestsUpdatePaymentRequest($body, $store_id, $payment_request_id)

Update payment request

Update a payment request

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


$apiInstance = new Swagger\Client\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PaymentRequestBaseData(); // \Swagger\Client\Model\PaymentRequestBaseData | 
$store_id = "store_id_example"; // string | The store to query
$payment_request_id = "payment_request_id_example"; // string | The payment request to update

try {
    $result = $apiInstance->paymentRequestsUpdatePaymentRequest($body, $store_id, $payment_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->paymentRequestsUpdatePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentRequestBaseData**](../Model/PaymentRequestBaseData.md)|  |
 **store_id** | **string**| The store to query |
 **payment_request_id** | **string**| The payment request to update |

### Return type

[**\Swagger\Client\Model\PaymentRequestData**](../Model/PaymentRequestData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

