<?php
// OrderID verification
require __DIR__ . '/config/src/autoload.php';

use BTCPayServer\Client\Invoice;

function verifyOrderId($orderId) {
    $apiKey = getenv('API_KEY'); //place your information here
    $host = getenv('HOST');
    $storeId = getenv('STORE_ID');

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
// Filter and retain essential information. it uses the POST method, when sending a form for example
/*         if (isset($_POST['order_id'])) {
    $orderId = filter_var($_POST['order_id'], FILTER_SANITIZE_STRING);
    $isValid = verifyOrderId($orderId);

    if ($isValid) {
        // Extraction des informations de paiement
        $price = $isValid['amount'];
        $currency = $isValid['currency'];
        $buyerEmail = filter_var($isValid['metadata']['buyer_email'], FILTER_SANITIZE_EMAIL);
        $buyerUsername = filter_var($isValid['metadata']['buyer_username'], FILTER_SANITIZE_STRING);
        $paymentId = $isValid['id'];
        $invoiceTime = $isValid['createdTime'];
        $name = $isValid['metadata']['itemCode'];}} */

