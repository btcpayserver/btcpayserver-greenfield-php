<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\LightningStore;
use BTCPayServer\Result\LightningChannel;
use BTCPayServer\Result\LightningChannelList;
use BTCPayServer\Result\LightningInvoice;
use BTCPayServer\Result\LightningPayment;
use BTCPayServer\Util\PreciseNumber;
use Exception;

final class LightningStoreTest extends BaseTest
{
    protected LightningStore $lightningStoreClient;

    public function setUp(): void
    {
        parent::setUp();

        $this->lightningStoreClient = new LightningStore($this->host, $this->apiKey);
    }

    /** @group createLightningInvoice */
    public function testItCanCreateALightningInvoiceAndReturnsLightningInvoiceObject(): void
    {
        $lightningInvoice = $this->lightningStoreClient->createLightningInvoice(
            cryptoCode: 'BTC',
            storeId: $this->storeId,
            amount: '100000', // milisats
            expiry: 111111,
            description: 'Test invoice description',
        );

        $this->assertInstanceOf(LightningInvoice::class, $lightningInvoice);

        $this->lightningInvoice = $lightningInvoice;

        $this->assertIsString($lightningInvoice->getId());
        $this->assertIsString($lightningInvoice->getStatus());
        $this->assertIsString($lightningInvoice->getBolt11());

        // If the lightning invoice is paid, assert the paid at is an int
        if ($lightningInvoice->getPaidAt()) {
            $this->assertIsInt($lightningInvoice->getPaidAt());
        }

        $this->assertIsInt($lightningInvoice->getExpiresAt());
        $this->assertInstanceOf(PreciseNumber::class, $lightningInvoice->getAmount());

        // If the lightning invoice is paid, assert the amount received is a PreciseNumber
        if ($lightningInvoice->getAmountReceived()) {
            $this->assertInstanceOf(PreciseNumber::class, $lightningInvoice->getAmountReceived());
        }
    }

    /** @group payLightningInvoice */
    public function testItReceivesLightningPaymentObjectAfterPayingLightningInvoiceWithAllGetters(): void
    {
        $this->markTestSkipped('Requires a new invoice on each test run');
        $bolt11 = '';

        $lightningPayment = $this->lightningStoreClient->payLightningInvoice(
            cryptoCode: 'BTC',
            storeId: $this->storeId,
            BOLT11: $bolt11,
            maxFeePercent: 0.1,
            maxFeeFlat: 100,
        );

        $this->assertInstanceOf(LightningPayment::class, $lightningPayment);

        // There is a bug in Greenfield API that is returning null values on everything except total and fee amounts.
        // Uncomment these lines when the bug is fixed.
        // https://github.com/btcpayserver/btcpayserver/issues/4229

        // $this->assertIsString($lightningPayment->getId());
        // $this->assertIsString($lightningPayment->getStatus());
        // $this->assertIsString($lightningPayment->getBolt11());
        // $this->assertIsString($lightningPayment->getPaymentHash());
        // $this->assertIsString($lightningPayment->getPreimage());
        // $this->assertIsInt($lightningPayment->getCreatedAt());
        // $this->assertInstanceOf(PreciseNumber::class, $lightningPayment->getTotalAmount());
        // $this->assertInstanceOf(PreciseNumber::class, $lightningPayment->getFeeAmount());
    }

    /** @group connectToLightningNode */
    public function testItCanConnectToALightningNodeAndReturnsLightningNodeConnectionObject(): void
    {
        $this->markTestSkipped('This test is skipped because I always get 503.');
        try {
            $lightningNodeConnection = $this->lightningStoreClient->connectToLightningNode(
                cryptoCode: 'BTC',
                storeId: $this->storeId,
                nodeURI: $this->nodeUri,
            );

            $this->assertInstanceOf(LightningNodeConnection::class, $lightningNodeConnection);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /** @group getNodeInformation */
    public function testItCanGetNodeInformationAndReturnsLightningNodeInformationObject(): void
    {
        $lightningNodeInformation = $this->lightningStoreClient->getNodeInformation(
            cryptoCode: 'BTC',
            storeId: $this->storeId,
        );

        $this->assertInstanceOf(\BTCPayServer\Result\LightningNode::class, $lightningNodeInformation);

        $this->assertIsArray($lightningNodeInformation->getNodeURIs());
        $this->assertIsInt($lightningNodeInformation->getBlockHeight());
        $this->assertIsString($lightningNodeInformation->getAlias());
        $this->assertIsString($lightningNodeInformation->getColor());
        $this->assertIsString($lightningNodeInformation->getVersion());
        $this->assertIsInt($lightningNodeInformation->getPeersCount());
        $this->assertIsInt($lightningNodeInformation->getPendingChannelsCount());
        $this->assertIsInt($lightningNodeInformation->getActiveChannelsCount());
        $this->assertIsInt($lightningNodeInformation->getInactiveChannelsCount());
    }

    /** @group getChannels */
    public function testItCanGetChannelsAndReturnsLightningChannelListObject(): void
    {
        $lightningChannels = $this->lightningStoreClient->getChannels(
            cryptoCode: 'BTC',
            storeId: $this->storeId,
        );

        $this->assertInstanceOf(LightningChannelList::class, $lightningChannels);

        $this->assertIsArray($lightningChannels->all());

        foreach ($lightningChannels->all() as $channel) {
            $this->assertInstanceOf(LightningChannel::class, $channel);
            $this->assertIsString($channel->getRemoteNode());
            $this->assertIsString($channel->getChannelPoint());
            $this->assertIsString($channel->getCapacity());
            $this->assertIsString($channel->getLocalBalance());
            $this->assertIsBool($channel->isActive());
            $this->assertIsBool($channel->isPublic());
        }
    }

    /** @group getDepositAddress */
    public function testItCanGetANewDepositAddress(): void
    {
        $depositAddress = $this->lightningStoreClient->getDepositAddress(
            cryptoCode: 'BTC',
            storeId: $this->storeId,
        );

        $this->assertIsString($depositAddress);
    }

    /** @group getLightningInvoice */
    public function testItCanGetAnInvoiceAndReturnsLightningInvoiceObject(): void
    {
        $getLightningInvoice = $this->lightningStoreClient->createLightningInvoice(
            cryptoCode: 'BTC',
            storeId: $this->storeId,
            amount: '100000', // milisats
            expiry: 111111,
            description: 'Test invoice description',
        );

        $lightningInvoice = $this->lightningStoreClient->getLightningInvoice(
            'BTC',
            $this->storeId,
            $getLightningInvoice->getId(),
        );

        $this->assertInstanceOf(LightningInvoice::class, $lightningInvoice);

        $this->assertIsString($lightningInvoice->getId());
        $this->assertIsString($lightningInvoice->getStatus());
        $this->assertIsString($lightningInvoice->getBolt11());

        // If the invoice get Paid at is not null, assert it's int
        if ($lightningInvoice->getPaidAt() !== null) {
            $this->assertIsInt($lightningInvoice->getPaidAt());
        }

        $this->assertIsInt($lightningInvoice->getExpiresAt());
        $this->assertInstanceOf(PreciseNumber::class, $lightningInvoice->getAmount());

        // If the invoice get Paid amount is not null, assert it's PreciseNumber
        if ($lightningInvoice->getAmountReceived() !== null) {
            $this->assertInstanceOf(PreciseNumber::class, $lightningInvoice->getAmountReceived());
        }
    }
}
