<?php

require __DIR__ . '/../vendor/autoload.php';

use BTCPayServer\Client\ApiKey;

// Fill in with your BTCPay Server data.
$apiKey = '';
$host = ''; // e.g. https://your.btcpay-server.tld
$storeId = '';
$invoiceId = '';

// Get information about store on BTCPay Server.
try {
    $client = new ApiKey($host, $apiKey);
    var_dump($client->getCurrent());
} catch (\Throwable $e) {
    echo "Error: " . $e->getMessage();
}

// Create a new api key. Needs server modify permission of used api.
try {
    $client = new Apikey($host, $apiKey);
    var_dump($client->createApiKey('api generated', ['btcpay.store.canmodifystoresettings']));
} catch (\Throwable $e) {
    echo "Error: " . $e->getMessage();
}
