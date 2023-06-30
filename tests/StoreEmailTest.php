<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Store;
use BTCPayServer\Client\StoreEmail;
use BTCPayServer\Result\Store as ResultStore;
use BTCPayServer\Result\StoreEmailSettings;

final class StoreEmailTest extends BaseTest
{
    public Store $storeClient;
    public ResultStore $store;
    public StoreEmail $storeEmailClient;

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

        $this->storeEmailClient = new StoreEmail($this->host, $this->apiKey);
    }

    /** @group getSettings */
    public function testItCanGetEmailSettings(): void
    {
        $storeEmailSettings = $this->storeEmailClient->getSettings($this->store->getId());
        $this->assertEmailSettingsGettersAreSet($storeEmailSettings);
    }

    /** @group updateSettings */
    public function testItCanUpdateEmailSettings(): void
    {
        $storeEmailSettings = $this->storeEmailClient->updateSettings(
            $this->store->getId(),
            server: 'smtp.example.com',
            port: 587,
            username: 'tester',
            password: 'password',
            fromEmail: 'tester@btcpayserver.org',
            fromName: 'Tester',
            disableCertificateCheck: false,
        );

        $this->assertEmailSettingsGettersAreSet($storeEmailSettings);
    }

    /** @group sendMail */
    public function testItCanSendMail(): void
    {
        $email = $this->storeEmailClient->sendMail(
            storeId: $this->store->getId(),
            email: 'testing@btcpayserver.org',
            subject: 'Test Email',
            body: 'This is a test email',
        );

        $this->assertTrue($email);
    }

    private function assertEmailSettingsGettersAreSet($storeEmailSettings): void
    {
        $this->assertInstanceOf(StoreEmailSettings::class, $storeEmailSettings);
        if ($storeEmailSettings->getServer()) {
            $this->assertIsString($storeEmailSettings->getServer());
        }
        if ($storeEmailSettings->getPort()) {
            $this->assertIsInt($storeEmailSettings->getPort());
        }
        if ($storeEmailSettings->getUsername()) {
            $this->assertIsString($storeEmailSettings->getUsername());
        }
        if ($storeEmailSettings->getPassword()) {
            $this->assertIsString($storeEmailSettings->getPassword());
        }
        if ($storeEmailSettings->getFromEmail()) {
            $this->assertIsString($storeEmailSettings->getFromEmail());
        }
        // @TODO: Re-enable when bug is fixed - https://github.com/btcpayserver/btcpayserver/issues/5139
        // if ($storeEmailSettings->getFromName()) $this->assertIsString($storeEmailSettings->getFromName());
    }
}
