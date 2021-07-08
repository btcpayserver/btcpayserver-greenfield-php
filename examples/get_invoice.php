<?php

// Include autoload file.
require __DIR__ . '/../vendor/autoload.php';

// Import Invoice client class.
use BTCPayServer\Client\Invoice;

// Fill in with your BTCPay Server data.
$apiKey = '';
$host = ''; // e.g. https://your.btcpay-server.tld
$storeId = '';
$invoiceId = '';

// Get information about a specific invoice.
try {
  $client = new Invoice($host, $apiKey);
  var_dump($client->getInvoice($storeId, $invoiceId));
}
catch (\Exception $e) {
  echo "Error: " . $e->getMessage();
}
