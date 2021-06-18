# Swagger\Client\InvoicesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesActivatePaymentMethod**](InvoicesApi.md#invoicesactivatepaymentmethod) | **POST** /api/v1/stores/{storeId}/invoices/{invoiceId}/payment-methods/{paymentMethod}/activate | Activate Payment Method
[**invoicesArchiveInvoice**](InvoicesApi.md#invoicesarchiveinvoice) | **DELETE** /api/v1/stores/{storeId}/invoices/{invoiceId} | Archive invoice
[**invoicesArchiveInvoice_0**](InvoicesApi.md#invoicesarchiveinvoice_0) | **DELETE** /api/v1/stores/{storeId}/invoices/{invoiceId}/payment-methods | Archive invoice
[**invoicesCreateInvoice**](InvoicesApi.md#invoicescreateinvoice) | **POST** /api/v1/stores/{storeId}/invoices | Create a new invoice
[**invoicesGetInvoice**](InvoicesApi.md#invoicesgetinvoice) | **GET** /api/v1/stores/{storeId}/invoices/{invoiceId} | Get invoice
[**invoicesGetInvoicePaymentMethods**](InvoicesApi.md#invoicesgetinvoicepaymentmethods) | **GET** /api/v1/stores/{storeId}/invoices/{invoiceId}/payment-methods | Get invoice payment methods
[**invoicesGetInvoices**](InvoicesApi.md#invoicesgetinvoices) | **GET** /api/v1/stores/{storeId}/invoices | Get invoices
[**invoicesMarkInvoiceStatus**](InvoicesApi.md#invoicesmarkinvoicestatus) | **POST** /api/v1/stores/{storeId}/invoices/{invoiceId}/status | Mark invoice status
[**invoicesUnarchiveInvoice**](InvoicesApi.md#invoicesunarchiveinvoice) | **POST** /api/v1/stores/{storeId}/invoices/{invoiceId}/unarchive | Unarchive invoice
[**invoicesUpdateInvoice**](InvoicesApi.md#invoicesupdateinvoice) | **PUT** /api/v1/stores/{storeId}/invoices/{invoiceId} | Update invoice

# **invoicesActivatePaymentMethod**
> invoicesActivatePaymentMethod($store_id, $invoice_id, $payment_method)

Activate Payment Method

Activate an invoice payment method (if lazy payments mode is enabled)

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to query
$invoice_id = "invoice_id_example"; // string | The invoice to update
$payment_method = "payment_method_example"; // string | The payment method to activate

try {
    $apiInstance->invoicesActivatePaymentMethod($store_id, $invoice_id, $payment_method);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesActivatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to query |
 **invoice_id** | **string**| The invoice to update |
 **payment_method** | **string**| The payment method to activate |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesArchiveInvoice**
> invoicesArchiveInvoice($store_id, $invoice_id)

Archive invoice

Archives the specified invoice.

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store the invoice belongs to
$invoice_id = "invoice_id_example"; // string | The invoice to remove

try {
    $apiInstance->invoicesArchiveInvoice($store_id, $invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesArchiveInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store the invoice belongs to |
 **invoice_id** | **string**| The invoice to remove |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesArchiveInvoice_0**
> invoicesArchiveInvoice_0($store_id, $invoice_id)

Archive invoice

Archives the specified invoice.

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store the invoice belongs to
$invoice_id = "invoice_id_example"; // string | The invoice to remove

try {
    $apiInstance->invoicesArchiveInvoice_0($store_id, $invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesArchiveInvoice_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store the invoice belongs to |
 **invoice_id** | **string**| The invoice to remove |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesCreateInvoice**
> \Swagger\Client\Model\InvoiceData invoicesCreateInvoice($body, $store_id)

Create a new invoice

Create a new invoice

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateInvoiceRequest(); // \Swagger\Client\Model\CreateInvoiceRequest | 
$store_id = "store_id_example"; // string | The store to query

try {
    $result = $apiInstance->invoicesCreateInvoice($body, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesCreateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateInvoiceRequest**](../Model/CreateInvoiceRequest.md)|  |
 **store_id** | **string**| The store to query |

### Return type

[**\Swagger\Client\Model\InvoiceData**](../Model/InvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesGetInvoice**
> \Swagger\Client\Model\InvoiceData invoicesGetInvoice($store_id, $invoice_id)

Get invoice

View information about the specified invoice

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$invoice_id = "invoice_id_example"; // string | The invoice to fetch

try {
    $result = $apiInstance->invoicesGetInvoice($store_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **invoice_id** | **string**| The invoice to fetch |

### Return type

[**\Swagger\Client\Model\InvoiceData**](../Model/InvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesGetInvoicePaymentMethods**
> \Swagger\Client\Model\InvoicePaymentMethodDataModel[] invoicesGetInvoicePaymentMethods($store_id, $invoice_id, $only_accounted_payments)

Get invoice payment methods

View information about the specified invoice's payment methods

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to fetch
$invoice_id = "invoice_id_example"; // string | The invoice to fetch
$only_accounted_payments = true; // bool | If default or true, only returns payments which are accounted (in Bitcoin, this mean not returning RBF'd or double spent payments)

try {
    $result = $apiInstance->invoicesGetInvoicePaymentMethods($store_id, $invoice_id, $only_accounted_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetInvoicePaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to fetch |
 **invoice_id** | **string**| The invoice to fetch |
 **only_accounted_payments** | **bool**| If default or true, only returns payments which are accounted (in Bitcoin, this mean not returning RBF&#x27;d or double spent payments) | [optional] [default to true]

### Return type

[**\Swagger\Client\Model\InvoicePaymentMethodDataModel[]**](../Model/InvoicePaymentMethodDataModel.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesGetInvoices**
> \Swagger\Client\Model\InvoiceDataList invoicesGetInvoices($store_id, $order_id)

Get invoices

View information about the existing invoices

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to query
$order_id = array("order_id_example"); // string[] | Array of OrderIds to fetch the invoices for

try {
    $result = $apiInstance->invoicesGetInvoices($store_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to query |
 **order_id** | [**string[]**](../Model/string.md)| Array of OrderIds to fetch the invoices for | [optional]

### Return type

[**\Swagger\Client\Model\InvoiceDataList**](../Model/InvoiceDataList.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesMarkInvoiceStatus**
> \Swagger\Client\Model\InvoiceData invoicesMarkInvoiceStatus($body, $store_id, $invoice_id)

Mark invoice status

Mark an invoice as invalid or settled.

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MarkInvoiceStatusRequest(); // \Swagger\Client\Model\MarkInvoiceStatusRequest | 
$store_id = "store_id_example"; // string | The store to query
$invoice_id = "invoice_id_example"; // string | The invoice to update

try {
    $result = $apiInstance->invoicesMarkInvoiceStatus($body, $store_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesMarkInvoiceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MarkInvoiceStatusRequest**](../Model/MarkInvoiceStatusRequest.md)|  |
 **store_id** | **string**| The store to query |
 **invoice_id** | **string**| The invoice to update |

### Return type

[**\Swagger\Client\Model\InvoiceData**](../Model/InvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesUnarchiveInvoice**
> \Swagger\Client\Model\InvoiceData invoicesUnarchiveInvoice($store_id, $invoice_id)

Unarchive invoice

Unarchive an invoice

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store to query
$invoice_id = "invoice_id_example"; // string | The invoice to update

try {
    $result = $apiInstance->invoicesUnarchiveInvoice($store_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesUnarchiveInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store to query |
 **invoice_id** | **string**| The invoice to update |

### Return type

[**\Swagger\Client\Model\InvoiceData**](../Model/InvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesUpdateInvoice**
> \Swagger\Client\Model\InvoiceData invoicesUpdateInvoice($body, $store_id, $invoice_id)

Update invoice

Updates the specified invoice.

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


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateInvoiceRequest(); // \Swagger\Client\Model\UpdateInvoiceRequest | 
$store_id = "store_id_example"; // string | The store the invoice belongs to
$invoice_id = "invoice_id_example"; // string | The invoice to update

try {
    $result = $apiInstance->invoicesUpdateInvoice($body, $store_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesUpdateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateInvoiceRequest**](../Model/UpdateInvoiceRequest.md)|  |
 **store_id** | **string**| The store the invoice belongs to |
 **invoice_id** | **string**| The invoice to update |

### Return type

[**\Swagger\Client\Model\InvoiceData**](../Model/InvoiceData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

