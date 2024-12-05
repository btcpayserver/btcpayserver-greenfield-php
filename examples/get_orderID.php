<?php
// OrderID verification
require __DIR__ . '/config/src/autoload.php';

use BTCPayServer\Client\Invoice;

function verifyOrderId($orderId) {
    $apiKey = ''; //place your information here
    $host = '';
    $storeId = '';

    try {
        $client = new Invoice($host, $apiKey);
        $invoices = $client->getInvoicesByOrderIds($storeId, [$orderId]);

        return !empty($invoices->getData()) ? $invoices->getData()[0] : null;
    } catch (\Throwable $e) {
        error_log($e->getMessage());
        return null;
    }
}
?>


