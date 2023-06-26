<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Store;
use BTCPayServer\Result\Store as ResultStore;
use BTCPayServer\Result\StoreList;
use BTCPayServer\Util\PreciseNumber;

final class StoreTest extends BaseTest
{
    public Store $storeClient;
    public ResultStore $store;

    public function setUp(): void
    {
        parent::setUp();

        $this->storeClient = new Store($this->host, $this->apiKey);
        $this->store = $this->storeClient->createStore(
            name: 'Test Store',
            website: 'https://example.com',
            defaultCurrency: 'USD',
            invoiceExpiration: 900,
            displayExpirationTimer: 300,
            monitoringExpiration: 3600,
            speedPolicy: 'MediumSpeed',
            lightningDescriptionTemplate: null,
            paymentTolerance: 0,
            anyoneCanCreateInvoice: false,
            requiresRefundEmail: false,
            checkoutType: 'V1',
            receipt: null,
            lightningAmountInSatoshi: false,
            lightningPrivateRouteHints: false,
            onChainWithLnInvoiceFallback: false,
            redirectAutomatically: false,
            showRecommendedFee: true,
            recommendedFeeBlockTarget: 1,
            defaultLang: 'en',
            customLogo: 'https://test.com',
            customCSS: 'auto: 100px;',
            htmlTitle: 'the best store ever',
            networkFeeMode: 'MultiplePaymentsOnly',
            payJoinEnabled: false,
            lazyPaymentMethods: false,
            defaultPaymentMethod: 'BTC'
        );
    }

    /** @group createStore */
    public function testItCanCreateAStore(): void
    {
        $this->assertStoreGettersAreSet($this->store);
    }

    /** @group getStores */
    public function testItCanGetAllStores(): void
    {
        $stores = $this->storeClient->getStores();

        $this->assertInstanceOf(StoreList::class, $stores);

        foreach ($stores->all() as $store) {
            $this->assertStoreGettersAreSet($store);
        }
    }

    /** @group getStore */
    public function testItCanGetAnIndividualStore(): void
    {
        $store = $this->storeClient->getStore($this->store->getId());
        $this->assertStoreGettersAreSet($store);
    }

    private function assertStoreGettersAreSet(ResultStore $store): void
    {
        $this->assertInstanceOf(ResultStore::class, $store);
        $this->assertIsString($store->getName());
        $this->assertIsInt($store->getInvoiceExpiration());
        $this->assertIsInt($store->getMonitoringExpiration());
        $this->assertIsString($store->getSpeedPolicy());
        $this->assertIsString($store->getLightningDescriptionTemplate());
        $this->assertInstanceOf(PreciseNumber::class, $store->getPaymentTolerance());
        $this->assertIsBool($store->anyoneCanCreateInvoice());
        $this->assertIsBool($store->requiresRefundEmail());
        $this->assertIsBool($store->lightningAmountInSatoshi());
        $this->assertIsBool($store->lightningPrivateRouteHints());
        $this->assertIsBool($store->onChainWithLnInvoiceFallback());
        $this->assertIsBool($store->redirectAutomatically());
        $this->assertIsBool($store->showRecommendedFee());
        $this->assertIsInt($store->getRecommendedFeeBlockTarget());

        if ($store->getCustomLogo() !== null) {
            $this->assertIsString($store->getCustomLogo());
        }

        if ($store->getCustomCSS() !== null) {
            $this->assertIsString($store->getCustomCSS());
        }

        if ($store->getHtmlTitle() !== null) {
            $this->assertIsString($store->getHtmlTitle());
        }
        if ($store->getWebsite() !== null) {
            $this->assertIsString($store->getWebsite());
        }
        if ($store->getDefaultPaymentMethod() !== null) {
            $this->assertIsString($store->getDefaultPaymentMethod());
        }

        $this->assertIsString($store->getNetworkFeeMode());
        $this->assertIsBool($store->payJoinEnabled());
        $this->assertIsBool($store->lazyPaymentMethods());
        $this->assertIsString($store->getId());
    }
}
