<?php

// Include autoload file.
require __DIR__ . '/../vendor/autoload.php';

// Import Invoice client class.
use BTCPayServer\Client\Invoice;

// Fill in with your BTCPay Server data.
$apiKey = '';
$host = ''; // e.g. https://your.btcpay-server.tld
$storeId = '';
$secret = ""; // webhook secret configured in the BTCPay UI

$myfile = fopen("BTCPayIPN.log", "a");

$raw_post_data = file_get_contents('php://input');

$date = date('m/d/Y h:i:s a', time());

if (false === $raw_post_data) {
    fwrite($myfile, $date . " : Error. Could not read from the php://input stream or invalid BTCPayServer IPN received.\n");
    fclose($myfile);
    throw new \Exception('Could not read from the php://input stream or invalid BTCPayServer IPN received.');
}

$ipn = json_decode($raw_post_data);

if (true === empty($ipn)) {
    fwrite($myfile, $date . " : Error. Could not decode the JSON payload from BTCPay.\n");
    fclose($myfile);
    throw new \Exception('Could not decode the JSON payload from BTCPay.');
}

// verify hmac256
$headers = getallheaders();
$sig = $headers['Btcpay-Sig'];

if ($sig != "sha256=" . hash_hmac('sha256', $raw_post_data, $secret)) {
    fwrite($myfile, $date . " : Error. Invalid Signature detected! \n was: " . $sig . " should be: " . hash_hmac('sha256', $raw_post_data, $secret) . "\n");
    fclose($myfile);
    throw new \Exception('Invalid BTCPayServer payment notification message received - signature did not match.');
}

if (true === empty($ipn->invoiceId)) {
    fwrite($myfile, $date . " : Error. Invalid BTCPayServer payment notification message received - did not receive invoice ID.\n");
    fclose($myfile);
    throw new \Exception('Invalid BTCPayServer payment notification message received - did not receive invoice ID.');
}

try {
    $client = new Invoice($host, $apiKey);
    $invoice = $client->getInvoice($storeId, $ipn->invoiceId);
} catch (\Throwable $e) {
    fwrite($myfile, "Error: " . $e->getMessage());
    throw $e;
}

// optional: check whether your webhook is of the desired type
if ($ipn->type != "InvoiceSettled") {
    throw new \Exception('Invalid IPN Message Type only InvoiceSettled supported, check configuration of webhook');
}

$invoicePrice = $invoice->getData()['amount'];
$buyerEmail = $invoice->getData()['metadata']['buyerEmail'];

fwrite($myfile, $date . " : IPN received for BtcPay invoice " . $ipn->invoiceId . " Type: " . $ipn->type . " Price: " . $invoicePrice . " E-Mail: " . $buyerEmail . "\n");
fwrite($myfile, "Raw IPN: " . $raw_post_data . "\n");

// your own processing code goes here!

header("HTTP/1.1 200 OK");
