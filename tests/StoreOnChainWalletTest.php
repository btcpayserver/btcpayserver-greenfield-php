<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Store;
use BTCPayServer\Client\StoreOnChainWallet;
use BTCPayServer\Result\StoreOnChainWallet as ResultStoreOnChainWallet;
use BTCPayServer\Result\StoreOnChainWalletAddress;
use BTCPayServer\Result\StoreOnChainWalletFeeRate;
use BTCPayServer\Result\StoreOnChainWalletTransaction;
use BTCPayServer\Result\StoreOnChainWalletTransactionDestination;
use BTCPayServer\Result\StoreOnChainWalletTransactionList;
use BTCPayServer\Result\StoreOnChainWalletUtxo;
use BTCPayServer\Result\StoreOnChainWalletUtxoList;
use BTCPayServer\Util\PreciseNumber;

final class StoreOnChainWalletTest extends BaseTest
{
    public Store $storeClient;
    public StoreOnChainWallet $storeOnChainWalletClient;

    public function setUp(): void
    {
        parent::setUp();

        $this->storeClient = new Store($this->host, $this->apiKey);
        $this->storeOnChainWalletClient = new StoreOnChainWallet($this->host, $this->apiKey);
    }

    /** @group getStoreOnChainWalletOverview */
    public function testItCanGetStoreOnChainWalletOverview(): void 
    {
        //$this->markTestIncomplete('BTC doesnt have any derivation scheme set');
        $overview = $this->storeOnChainWalletClient->getStoreOnChainWalletOverview(
            $this->storeId,
            'BTC'
        );

        $this->assertInstanceOf(ResultStoreOnChainWallet::class, $overview);
        $this->assertInstanceOf(PreciseNumber::class, $overview->getBalance());
        $this->assertInstanceOf(PreciseNumber::class, $overview->getUnconfirmedBalance());
        $this->assertInstanceOf(PreciseNumber::class, $overview->getConfirmedBalance());
        $this->assertIsString($overview->getLabel());
    }

    /** @group getStoreOnChainWalletFeeRate */
    public function testItCanGetStoreOnChainWalletFeeRate(): void 
    {
        $feeRate = $this->storeOnChainWalletClient->getStoreOnChainWalletFeeRate(
            $this->storeId,
            'BTC'
        );

        $this->assertInstanceOf(StoreOnChainWalletFeeRate::class, $feeRate);
        $this->assertInstanceOf(PreciseNumber::class, $feeRate->getFeeRate());
    }

    /** @group getStoreOnChainWalletAddress */
    public function testItCanGetStoreOnChainWalletAddress(): void 
    {
        $address = $this->storeOnChainWalletClient->getStoreOnChainWalletAddress(
            $this->storeId,
            'BTC'
        );

        $this->assertInstanceOf(StoreOnChainWalletAddress::class, $address);
        $this->assertIsString($address->getAddress());
        $this->assertIsString($address->getKeyPath());
        $this->assertIsString($address->getPaymentLink());
    }

    /** @group unReserveLastStoreOnChainWalletAddress */
    public function testItCanunReserveLastStoreOnChainWalletAddress(): void
    {
        $address = $this->storeOnChainWalletClient->unReserveLastStoreOnChainWalletAddress(
            $this->storeId,
            'BTC'
        );

        $this->assertIsBool($address);
    }

    /** @group getStoreOnChainWalletTransactions */
    public function testItCanGetStoreOnChainWalletTransactions(): void
    {
        $transactions = $this->storeOnChainWalletClient->getStoreOnChainWalletTransactions(
            $this->storeId,
            'BTC'
        );

        $this->assertInstanceOf(StoreOnChainWalletTransactionList::class, $transactions);
        $this->assertIsArray($transactions->all());

        foreach ($transactions->all() as $transaction) {
            $this->assertInstanceOf(StoreOnChainWalletTransaction::class, $transaction);
            $this->assertIsString($transaction->getTransactionHash());
            $this->assertIsString($transaction->getComment());
            $this->assertIsArray($transaction->getLabels());
            $this->assertIsInt($transaction->getConfirmations());
            $this->assertIsInt($transaction->getTimestamp());
            $this->assertIsString($transaction->getStatus());
        }
    }

    /** @group createStoreOnChainWalletTransaction */
    public function testItCanCreateGetUpdateStoreOnChainWalletTransaction(): void
    {
        $destination = 
            [
                'destination' => 'tb1q2yy5gxpdlsr40xjvy7v6x4gjxr5y8t428nqppa',
                'amount' => "0.00001",
                'subtractFromAmount' => true,
            ];

        $transaction = $this->storeOnChainWalletClient->createStoreOnChainWalletTransaction(
            $this->storeId,
            'BTC',
            [$destination],
            2.0,
            false,
            true,
            false,
        );

        $this->assertInstanceOf(StoreOnChainWalletTransaction::class, $transaction);
        $this->assertIsString($transaction->getTransactionHash());
        $this->assertIsString($transaction->getComment());
        $this->assertIsArray($transaction->getLabels());
        $this->assertIsInt($transaction->getConfirmations());
        $this->assertIsInt($transaction->getTimestamp());
        $this->assertIsString($transaction->getStatus());

        if ($transaction->getBlockHash() !== null) {
            $this->assertIsString($transaction->getBlockHash());
        }

        if ($transaction->getBlockHeight() !== null) {
            $this->assertIsInt($transaction->getBlockHeight());
        }

        $getTransaction = $this->storeOnChainWalletClient->getStoreOnChainWalletTransaction(
            $this->storeId,
            'BTC',
            $transaction->getTransactionHash(),
        );

        $this->assertInstanceOf(StoreOnChainWalletTransaction::class, $getTransaction);
        $this->assertIsString($getTransaction->getTransactionHash());
        $this->assertIsString($getTransaction->getComment());
        $this->assertIsArray($getTransaction->getLabels());
        $this->assertIsInt($getTransaction->getConfirmations());
        $this->assertIsInt($getTransaction->getTimestamp());
        $this->assertIsString($getTransaction->getStatus());

        $updatedTransaction = $this->storeOnChainWalletClient->updateStoreOnChainWalletTransaction(
            $this->storeId,
            'BTC',
            $transaction->getTransactionHash(),
            'test comment',
            ['test label'],
        );

        $this->assertInstanceOf(StoreOnChainWalletTransaction::class, $updatedTransaction);
        $this->assertIsString($updatedTransaction->getTransactionHash());
        $this->assertIsString($updatedTransaction->getComment());
        $this->assertIsArray($updatedTransaction->getLabels());
        $this->assertIsInt($updatedTransaction->getConfirmations());
        $this->assertIsInt($updatedTransaction->getTimestamp());
        $this->assertIsString($updatedTransaction->getStatus());

        $this->assertEquals('test comment', $updatedTransaction->getComment());
    }

    /** @group getStoreOnChainWalletUtxos */
    public function testItCanGetStoreOnChainWalletUtxos(): void
    {
        $utxos = $this->storeOnChainWalletClient->getStoreOnChainWalletUtxos(
            $this->storeId,
            'BTC'
        );

        $this->assertInstanceOf(StoreOnChainWalletUtxoList::class, $utxos);

        foreach($utxos as $utxo) {
            $this->assertInstanceOf(StoreOnChainWalletUtxo::class, $utxo);
            $this->assertIsString($utxo->getComment());
            $this->assertIsString($utxo->getAmount());
            $this->assertIsString($utxo->getOutpoint());
            $this->assertIsString($utxo->getLink());
            $this->assertIsArray($utxo->getLabels());
            $this->assertIsInt($utxo->getTimestamp());
            $this->assertIsString($utxo->getKeyPath());
            $this->assertIsString($utxo->getAddress());
            $this->assertIsInt($utxo->getConfirmations());
        }
    }
}