# Swagger\Client\MiscalleneousApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iInvoiceIdGet**](MiscalleneousApi.md#iinvoiceidget) | **GET** /i/{invoiceId} | Invoice checkout
[**langCodes**](MiscalleneousApi.md#langcodes) | **GET** /misc/lang | Language codes

# **iInvoiceIdGet**
> iInvoiceIdGet($invoice_id, $lang)

Invoice checkout

View the checkout page of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscalleneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "invoice_id_example"; // string | The invoice id
$lang = "lang_example"; // string | The preferred language of the checkout page. You can see the list of language codes with [this operation](#operation/langCodes).

try {
    $apiInstance->iInvoiceIdGet($invoice_id, $lang);
} catch (Exception $e) {
    echo 'Exception when calling MiscalleneousApi->iInvoiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| The invoice id |
 **lang** | **string**| The preferred language of the checkout page. You can see the list of language codes with [this operation](#operation/langCodes). | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **langCodes**
> \Swagger\Client\Model\InlineResponse200[] langCodes()

Language codes

The supported language codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscalleneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->langCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscalleneousApi->langCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

