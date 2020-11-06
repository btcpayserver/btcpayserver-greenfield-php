# StoreBaseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the store | [optional] 
**website** | **string** | The absolute url of the store | [optional] 
**invoice_expiration** | **int** | The time after which an invoice is considered expired if not paid. The value will be rounded down to a minute. | [optional] [default to 900]
**monitoring_expiration** | **int** | The time after which an invoice which has been paid but not confirmed will be considered invalid. The value will be rounded down to a minute. | [optional] [default to 3600]
**speed_policy** | [**\Swagger\Client\Model\SpeedPolicy**](SpeedPolicy.md) |  | [optional] 
**lightning_description_template** | **string** | The BOLT11 description of the lightning invoice in the checkout. You can use placeholders &#x27;{StoreName}&#x27;, &#x27;{ItemDescription}&#x27; and &#x27;{OrderId}&#x27;. | [optional] 
**payment_tolerance** | **double** | Consider an invoice fully paid, even if the payment is missing &#x27;x&#x27; % of the full amount. | [optional] [default to 0]
**anyone_can_create_invoice** | **bool** | If true, then no authentication is needed to create invoices on this store. | [optional] [default to false]
**show_recommended_fee** | **bool** |  | [optional] [default to true]
**recommended_fee_block_target** | **int** | The fee rate recommendation in the checkout page for the on-chain payment to be confirmed after &#x27;x&#x27; blocks. | [optional] [default to 1]
**default_lang** | **string** | The default language to use in the checkout page. (The different translations available are listed [here](https://github.com/btcpayserver/btcpayserver/tree/master/BTCPayServer/wwwroot/locales) | [optional] [default to 'en']
**lightning_amount_in_satoshi** | **bool** | If true, lightning payment methods show amount in satoshi in the checkout page. | [optional] [default to false]
**custom_logo** | **string** | URL to a logo to include in the checkout page. | [optional] 
**custom_css** | **string** | URL to a CSS stylesheet to include in the checkout page | [optional] 
**html_title** | **string** | The HTML title of the checkout page (when you over the tab in your browser) | [optional] 
**redirect_automatically** | **bool** | After successfull payment, should the checkout page redirect the user automatically to the redirect URL of the invoice? | [optional] [default to false]
**requires_refund_email** | **bool** | If true, the checkout page will ask to enter an email address before accessing payment information. | [optional] [default to false]
**network_fee_mode** | [**\Swagger\Client\Model\NetworkFeeMode**](NetworkFeeMode.md) |  | [optional] 
**pay_join_enabled** | **bool** | If true, payjoin will be proposed in the checkout page if possible. ([More information](https://docs.btcpayserver.org/Payjoin/)) | [optional] [default to false]
**lightning_private_route_hints** | **bool** | Should private route hints be included in the lightning payment of the checkout page. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

