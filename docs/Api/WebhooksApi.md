# Swagger\Client\WebhooksApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1StoresStoreIdWebhooksPost**](WebhooksApi.md#apiv1storesstoreidwebhookspost) | **POST** /api/v1/stores/{storeId}/webhooks | Create a new webhook
[**apiV1StoresStoreIdWebhooksWebhookIdDelete**](WebhooksApi.md#apiv1storesstoreidwebhookswebhookiddelete) | **DELETE** /api/v1/stores/{storeId}/webhooks/{webhookId} | Delete a webhook
[**apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdGet**](WebhooksApi.md#apiv1storesstoreidwebhookswebhookiddeliveriesdeliveryidget) | **GET** /api/v1/stores/{storeId}/webhooks/{webhookId}/deliveries/{deliveryId} | Get a webhook delivery
[**apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRedeliverPost**](WebhooksApi.md#apiv1storesstoreidwebhookswebhookiddeliveriesdeliveryidredeliverpost) | **POST** /api/v1/stores/{storeId}/webhooks/{webhookId}/deliveries/{deliveryId}/redeliver | Redeliver the delivery
[**apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRequestGet**](WebhooksApi.md#apiv1storesstoreidwebhookswebhookiddeliveriesdeliveryidrequestget) | **GET** /api/v1/stores/{storeId}/webhooks/{webhookId}/deliveries/{deliveryId}/request | Get the delivery&#x27;s request
[**apiV1StoresStoreIdWebhooksWebhookIdDeliveriesGet**](WebhooksApi.md#apiv1storesstoreidwebhookswebhookiddeliveriesget) | **GET** /api/v1/stores/{storeId}/webhooks/{webhookId}/deliveries | Get latest deliveries
[**apiV1StoresStoreIdWebhooksWebhookIdPut**](WebhooksApi.md#apiv1storesstoreidwebhookswebhookidput) | **PUT** /api/v1/stores/{storeId}/webhooks/{webhookId} | Update a webhook
[**webhokksGetWebhook**](WebhooksApi.md#webhokksgetwebhook) | **GET** /api/v1/stores/{storeId}/webhooks/{webhookId} | Get a webhook of a store
[**webhokksGetWebhooks**](WebhooksApi.md#webhokksgetwebhooks) | **GET** /api/v1/stores/{storeId}/webhooks | Get webhooks of a store

# **apiV1StoresStoreIdWebhooksPost**
> \Swagger\Client\Model\WebhookDataCreate apiV1StoresStoreIdWebhooksPost($body, $store_id)

Create a new webhook

Create a new webhook

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WebhookDataCreate(); // \Swagger\Client\Model\WebhookDataCreate | 
$store_id = "store_id_example"; // string | The store id

try {
    $result = $apiInstance->apiV1StoresStoreIdWebhooksPost($body, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV1StoresStoreIdWebhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookDataCreate**](../Model/WebhookDataCreate.md)|  |
 **store_id** | **string**| The store id |

### Return type

[**\Swagger\Client\Model\WebhookDataCreate**](../Model/WebhookDataCreate.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1StoresStoreIdWebhooksWebhookIdDelete**
> apiV1StoresStoreIdWebhooksWebhookIdDelete($body, $store_id, $webhook_id)

Delete a webhook

Delete a webhook

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WebhookDataBase(); // \Swagger\Client\Model\WebhookDataBase | 
$store_id = "store_id_example"; // string | The store id
$webhook_id = "webhook_id_example"; // string | The webhook id

try {
    $apiInstance->apiV1StoresStoreIdWebhooksWebhookIdDelete($body, $store_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV1StoresStoreIdWebhooksWebhookIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookDataBase**](../Model/WebhookDataBase.md)|  |
 **store_id** | **string**| The store id |
 **webhook_id** | **string**| The webhook id |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdGet**
> \Swagger\Client\Model\WebhookDeliveryData apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdGet($store_id, $webhook_id, $delivery_id)

Get a webhook delivery

Information about a webhook delivery

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$webhook_id = "webhook_id_example"; // string | The webhook id
$delivery_id = "delivery_id_example"; // string | The id of the delivery

try {
    $result = $apiInstance->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdGet($store_id, $webhook_id, $delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **webhook_id** | **string**| The webhook id |
 **delivery_id** | **string**| The id of the delivery |

### Return type

[**\Swagger\Client\Model\WebhookDeliveryData**](../Model/WebhookDeliveryData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRedeliverPost**
> string apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRedeliverPost($store_id, $webhook_id, $delivery_id)

Redeliver the delivery

Redeliver the delivery

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$webhook_id = "webhook_id_example"; // string | The webhook id
$delivery_id = "delivery_id_example"; // string | The id of the delivery

try {
    $result = $apiInstance->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRedeliverPost($store_id, $webhook_id, $delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRedeliverPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **webhook_id** | **string**| The webhook id |
 **delivery_id** | **string**| The id of the delivery |

### Return type

**string**

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRequestGet**
> map[string,object] apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRequestGet($store_id, $webhook_id, $delivery_id)

Get the delivery's request

The delivery's JSON request sent to the endpoint

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$webhook_id = "webhook_id_example"; // string | The webhook id
$delivery_id = "delivery_id_example"; // string | The id of the delivery

try {
    $result = $apiInstance->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRequestGet($store_id, $webhook_id, $delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesDeliveryIdRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **webhook_id** | **string**| The webhook id |
 **delivery_id** | **string**| The id of the delivery |

### Return type

**map[string,object]**

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1StoresStoreIdWebhooksWebhookIdDeliveriesGet**
> \Swagger\Client\Model\WebhookDeliveryList apiV1StoresStoreIdWebhooksWebhookIdDeliveriesGet($store_id, $webhook_id, $count)

Get latest deliveries

List the latest deliveries to the webhook, ordered from the most recent

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$webhook_id = "webhook_id_example"; // string | The webhook id
$count = "count_example"; // string | The number of latest deliveries to fetch

try {
    $result = $apiInstance->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesGet($store_id, $webhook_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV1StoresStoreIdWebhooksWebhookIdDeliveriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **webhook_id** | **string**| The webhook id |
 **count** | **string**| The number of latest deliveries to fetch | [optional]

### Return type

[**\Swagger\Client\Model\WebhookDeliveryList**](../Model/WebhookDeliveryList.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1StoresStoreIdWebhooksWebhookIdPut**
> \Swagger\Client\Model\WebhookData apiV1StoresStoreIdWebhooksWebhookIdPut($body, $store_id, $webhook_id)

Update a webhook

Update a webhook

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WebhookDataBase(); // \Swagger\Client\Model\WebhookDataBase | 
$store_id = "store_id_example"; // string | The store id
$webhook_id = "webhook_id_example"; // string | The webhook id

try {
    $result = $apiInstance->apiV1StoresStoreIdWebhooksWebhookIdPut($body, $store_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV1StoresStoreIdWebhooksWebhookIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookDataBase**](../Model/WebhookDataBase.md)|  |
 **store_id** | **string**| The store id |
 **webhook_id** | **string**| The webhook id |

### Return type

[**\Swagger\Client\Model\WebhookData**](../Model/WebhookData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhokksGetWebhook**
> \Swagger\Client\Model\WebhookData webhokksGetWebhook($store_id, $webhook_id)

Get a webhook of a store

View webhook of a store

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$webhook_id = "webhook_id_example"; // string | The webhook id

try {
    $result = $apiInstance->webhokksGetWebhook($store_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhokksGetWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **webhook_id** | **string**| The webhook id |

### Return type

[**\Swagger\Client\Model\WebhookData**](../Model/WebhookData.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhokksGetWebhooks**
> \Swagger\Client\Model\WebhookDataList webhokksGetWebhooks($store_id)

Get webhooks of a store

View webhooks of a store

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


$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id

try {
    $result = $apiInstance->webhokksGetWebhooks($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhokksGetWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |

### Return type

[**\Swagger\Client\Model\WebhookDataList**](../Model/WebhookDataList.md)

### Authorization

[API Key](../../README.md#API Key), [Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

