# BTCPay Server Greenfield API PHP client library
This library makes it easier to integrate BTCPay Server in your PHP application.

## Approach
This library takes an opinionated approach to Greenfield API with the aim of making your developer life as easy and convenient as possible.
For this reason, we have decided to structure arguments a bit differently, but still allow full and advanced use cases.

The general reasoning behind the arguments an API client takes are in this order:
- First the required parameters => method arguments with NULL not allowed
- Recommended parameters => method arguments with NULL as default
- Optional parameters => arguments with NULL as default
- Lastly the advanced parameters => Inside an extra class

## Features
- No external dependencies. You can just drop this code in your project using composer or without composer.
- Requires PHP 7.3 and up. End-of-life'd versions will not be actively supported.
- All calls needed for eCommerce are included, but there are more we still need to add.

## TODO
- Autoloader just for our own files. Must not affect previously existing autoloaders.
- Getters and setters
- Expand beyond the eCommerce related API calls and make this library 100% complete.

## How to use with composer
```
composer install btcpayserver/btcpayserver-greenfield-php
```


## How to use without composer
TODO

## Best practices
- Always use an API key with as little permissions as possible.
- If you only interact with specific stores, use an API key that is limited to that store or those stores only.
- When processing an incoming webhook, always load the data fresh using the API as the data may be stale or changed in the meantime. Webhook payloads can be resent on error, so you could be seeing outdated information. By loading the data fresh, you are also protecting yourself from possibly spoofed (fake) requests. 

## FAQ
### Where to get the API key from?
The API keys for Greenfield API are *not* on the store level "Access Tokens" anymore. You need to go to your account profile: "My Settings" (user profile icon) -> "API Keys" instead. You can even redirect the users to generate the API keys there.

## Contribute
We run static analyzer [Psalm](https://psalm.dev/) and [PHP-CS-fixer](https://github.com/FriendsOfPhp/PHP-CS-Fixer) for codestyle when you open a pull-request. Please check if there are any errors and fix them accordingly.

### Codestyle
We use PSR-12 code style to ensure proper formatting and spacing. You can test and format your code using composer commands. Before doing a PR you can run `composer cs-check` and `composer cs-fix` which will run php-cs-fixer.
