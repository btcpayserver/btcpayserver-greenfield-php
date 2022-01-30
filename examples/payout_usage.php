<?php

require __DIR__ . '/../vendor/autoload.php';

use BTCPayServer\Client\PullPayment;
use BTCPayServer\Util\PreciseNumber;

class PullPayments {

    public $apiKey;
    public $host;
    public $storeId;

    public function __construct()
    {   
        $this->apiKey = '';
        $this->host = '';
        $this->storeId = '';
    }

    public function getStorePullPayments()
    {
        $includeArchived = TRUE;

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->getStorePullPayments(
                                $storeId, 
                                $includeArchived));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public function createPullPayment()
    {
        $paymentName = 'TestPayout-' . rand(0,10000000);
        $paymentAmount = PreciseNumber::parseString('0.000001');
        $paymentCurrency = 'BTC';
        $paymentPeriod = NULL;
        $boltExpiration = 1;
        $startsAt = NULL;
        $expiresAt = NULL;
        $paymentMethods = ['BTC'];

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->createPullPayment(
                                $storeId, 
                                $paymentName, 
                                $paymentAmount, 
                                $paymentCurrency, 
                                $paymentPeriod, 
                                $boltExpiration, 
                                $startsAt, 
                                $expiresAt, 
                                $paymentMethods)
            );
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function archivePullPayment()
    {
        $pullPaymentId = '';

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->archivePullPayment(
                                $storeId, 
                                $pullPaymentId));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function cancelPayout()
    {
        $payoutId = '';

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->cancelPayout(
                                $storeId, 
                                $payoutId));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function markPayoutAsPaid()
    {
        $payoutId = '';

        try {
            $client = new PullPayment($host, $apiKey);
            var_dump($client->markPayoutAsPaid(
                                $storeId, 
                                $payoutId));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$pp = new PullPayments();
//$pp->createPullPayment();
//$pp->getStorePullPayments();
//$pp->archivePullPayment();
//$pp->cancelPayout();
//$pp->markPayoutAsPaid();



