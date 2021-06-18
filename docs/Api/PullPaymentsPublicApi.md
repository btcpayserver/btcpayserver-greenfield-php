# Swagger\Client\PullPaymentsPublicApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullPaymentsCreatePayout**](PullPaymentsPublicApi.md#pullpaymentscreatepayout) | **POST** /api/v1/pull-payments/{pullPaymentId}/payouts | Create Payout
[**pullPaymentsGetPayouts**](PullPaymentsPublicApi.md#pullpaymentsgetpayouts) | **GET** /api/v1/pull-payments/{pullPaymentId}/payouts | Get Payouts
[**pullPaymentsGetPullPayment**](PullPaymentsPublicApi.md#pullpaymentsgetpullpayment) | **GET** /api/v1/pull-payments/{pullPaymentId} | Get Pull Payment

# **pullPaymentsCreatePayout**
> \Swagger\Client\Model\PayoutData pullPaymentsCreatePayout($body, $pull_payment_id)

Create Payout

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
$body = new \Swagger\Client\Model\CreatePayoutRequest(); // \Swagger\Client\Model\CreatePayoutRequest | 
$pull_payment_id = "pull_payment_id_example"; // string | The ID of the pull payment

try {
    $result = $apiInstance->pullPaymentsCreatePayout($body, $pull_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsPublicApi->pullPaymentsCreatePayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreatePayoutRequest**](../Model/CreatePayoutRequest.md)|  |
 **pull_payment_id** | **string**| The ID of the pull payment |

### Return type

[**\Swagger\Client\Model\PayoutData**](../Model/PayoutData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullPaymentsGetPayouts**
> \Swagger\Client\Model\PayoutDataList pullPaymentsGetPayouts($pull_payment_id, $include_cancelled)

Get Payouts

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
    $result = $apiInstance->pullPaymentsGetPayouts($pull_payment_id, $include_cancelled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsPublicApi->pullPaymentsGetPayouts: ', $e->getMessage(), PHP_EOL;
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

# **pullPaymentsGetPullPayment**
> \Swagger\Client\Model\PullPaymentData pullPaymentsGetPullPayment($pull_payment_id)

Get Pull Payment

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
    $result = $apiInstance->pullPaymentsGetPullPayment($pull_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullPaymentsPublicApi->pullPaymentsGetPullPayment: ', $e->getMessage(), PHP_EOL;
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

