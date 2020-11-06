# Swagger\Client\PullPaymentsPublicApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1PullPaymentsPullPaymentIdGet**](PullPaymentsPublicApi.md#apiv1pullpaymentspullpaymentidget) | **GET** /api/v1/pull-payments/{pullPaymentId} | 
[**apiV1PullPaymentsPullPaymentIdPayoutsGet**](PullPaymentsPublicApi.md#apiv1pullpaymentspullpaymentidpayoutsget) | **GET** /api/v1/pull-payments/{pullPaymentId}/payouts | 
[**apiV1PullPaymentsPullPaymentIdPayoutsPost**](PullPaymentsPublicApi.md#apiv1pullpaymentspullpaymentidpayoutspost) | **POST** /api/v1/pull-payments/{pullPaymentId}/payouts | 

# **apiV1PullPaymentsPullPaymentIdGet**
> \Swagger\Client\Model\PullPaymentData apiV1PullPaymentsPullPaymentIdGet($pull_payment_id)



Get a pull payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PullPaymentsPublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pull_payment_id = "pull_payment_id_example"; // string | The ID of the pull payment

try {
    $result = $apiInstance->apiV1PullPaymentsPullPaymentIdGet($pull_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsPublicApi->apiV1PullPaymentsPullPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pull_payment_id** | **string**| The ID of the pull payment |

### Return type

[**\Swagger\Client\Model\PullPaymentData**](../Model/PullPaymentData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PullPaymentsPullPaymentIdPayoutsGet**
> \Swagger\Client\Model\PayoutDataList apiV1PullPaymentsPullPaymentIdPayoutsGet($pull_payment_id, $include_cancelled)



Get payouts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PullPaymentsPublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pull_payment_id = "pull_payment_id_example"; // string | The ID of the pull payment
$include_cancelled = false; // bool | Whether this should list cancelled payouts

try {
    $result = $apiInstance->apiV1PullPaymentsPullPaymentIdPayoutsGet($pull_payment_id, $include_cancelled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsPublicApi->apiV1PullPaymentsPullPaymentIdPayoutsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pull_payment_id** | **string**| The ID of the pull payment |
 **include_cancelled** | **bool**| Whether this should list cancelled payouts | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\PayoutDataList**](../Model/PayoutDataList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PullPaymentsPullPaymentIdPayoutsPost**
> \Swagger\Client\Model\PayoutData apiV1PullPaymentsPullPaymentIdPayoutsPost($pull_payment_id)



Create a new payout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PullPaymentsPublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pull_payment_id = "pull_payment_id_example"; // string | The ID of the pull payment

try {
    $result = $apiInstance->apiV1PullPaymentsPullPaymentIdPayoutsPost($pull_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsPublicApi->apiV1PullPaymentsPullPaymentIdPayoutsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pull_payment_id** | **string**| The ID of the pull payment |

### Return type

[**\Swagger\Client\Model\PayoutData**](../Model/PayoutData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

