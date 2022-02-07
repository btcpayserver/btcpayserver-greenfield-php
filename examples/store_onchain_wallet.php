<?php

require __DIR__ . '/../vendor/autoload.php';

use BTCPayServer\Client\StoreOnChainWallet;
use BTCPayServer\Util\PreciseNumber;

class StoreOnChainWallets {

    public $apiKey;
    public $host;
    public $storeId;

    public function __construct()
    {   
        $this->apiKey = '';
        $this->host = '';
        $this->storeId = '';
    }

    public function getStoreOnChainWalletOverview()
    {
        $cryptoCode = 'BTC';

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->getStoreOnChainWalletOverview(
                                $this->storeId, 
                                $cryptoCode));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getStoreOnChainWalletFeeRate()
    {
        $cryptoCode = 'BTC';

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->getStoreOnChainWalletFeeRate(
                                $this->storeId, 
                                $cryptoCode));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getStoreOnChainWalletAddress()
    {
        $cryptoCode = 'BTC';

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->getStoreOnChainWalletAddress(
                                $this->storeId, 
                                $cryptoCode));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function unReserveLastStoreOnChainWalletAddress()
    {
        $cryptoCode = 'BTC';

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->unReserveLastStoreOnChainWalletAddress(
                                $this->storeId, 
                                $cryptoCode));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getStoreOnChainWalletTransactions()
    {
        $cryptoCode = 'BTC';

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->getStoreOnChainWalletTransactions(
                                $this->storeId, 
                                $cryptoCode));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function createStoreOnChainWalletTransaction()
    {
        $cryptoCode = 'BTC';
        $destinations = [];
        $feeRate = 0;
        $proceedWithPayjoin = false;
        $proceedWithBroadcast = true;
        $noChange = false;
        $rbf = null;
        $selectedInupts = [];

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->createStoreOnChainWalletTransaction(
                                $this->storeId, 
                                $cryptoCode,
                                $destinations,
                                $feeRate,
                                $proceedWithPayjoin,
                                $proceedWithBroadcast,
                                $noChange,
                                $rbf,
                                $selectedInupts));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getStoreOnChainWalletTransaction()
    {
        $cryptoCode = 'BTC';
        $transactionId = '';

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->getStoreOnChainWalletTransaction(
                                $this->storeId, 
                                $cryptoCode,
                                $transactionId));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getStoreOnChainWalletUTXOS()
    {
        $cryptoCode = 'BTC';

        try {
            $client = new StoreOnChainWallet($this->host, $this->apiKey);
            var_dump($client->getStoreOnChainWalletUTXOS(
                                $this->storeId, 
                                $cryptoCode));
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

$pp = new StoreOnChainWallets();
//$pp->createPullPayment();
//$pp->getStorePullPayments();
//$pp->archivePullPayment();
//$pp->cancelPayout();
//$pp->markPayoutAsPaid();
//$pp->getPullPayment();
//$pp->getPayouts();
//$pp->createPayout();
//$pp->getPayout();
