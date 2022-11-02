<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Invoice;
use BTCPayServer\Client\InvoiceCheckoutOptions;
use BTCPayServer\Result\Invoice as ResultInvoice;
use BTCPayServer\Result\InvoicePaymentMethod;
use BTCPayServer\Util\PreciseNumber;

final class InvoiceTest extends BaseTest
{
    private ResultInvoice $resultInvoice;
    private Invoice $invoiceClient;
    private InvoiceCheckoutOptions $invoiceCheckoutOptions;

    public function setUp(): void
    {
        parent::setUp();

        $this->invoiceClient = new Invoice($this->host, $this->apiKey);

        $this->invoiceCheckoutOptions = new InvoiceCheckoutOptions();
        $this->invoiceCheckoutOptions->setRedirectAutomatically(true);
        $this->invoiceCheckoutOptions->setRedirectURL('https://example.com/redirect');
        $this->invoiceCheckoutOptions->setDefaultLanguage('EN');
        $this->invoiceCheckoutOptions->setPaymentMethods(['BTC-LightningNetwork']);
        $this->invoiceCheckoutOptions->setRequiresRefundEmail(true);

        $this->resultInvoice = $this->invoiceClient->createInvoice(
            storeId: $this->storeId,
            currency: 'SATS',
            amount: PreciseNumber::parseString('1000'),
            orderId: '1234',
            buyerEmail: 'testing@btcpayserver.org',
            metaData: [
                'user_id' => '123456789',
            ],
            checkoutOptions: $this->invoiceCheckoutOptions,
        );
    }

    /** @group createInvoice */
    public function testItCanCreateAnInvoiceAndSetCheckoutOptions(): void
    {
        $this->assertInvoiceGettersAreSet($this->resultInvoice);
    }

    /** @group getInvoice */
    public function testItCanGetAnInvoiceWithCheckoutOptions(): void
    {
        $invoice = $this->invoiceClient->getInvoice(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId()
        );

        $this->assertInvoiceGettersAreSet($invoice);
    }

    private function assertInvoiceGettersAreSet(ResultInvoice $invoice): void
    {
        $this->assertInstanceOf(ResultInvoice::class, $invoice);
        $this->assertIsString($invoice->getId());
        $this->assertIsString($invoice->getStoreId());
        $this->assertIsString($invoice->getCurrency());
        $this->assertIsString($invoice->getType());
        $this->assertIsString($invoice->getCheckoutLink());
        $this->assertIsInt($invoice->getCreatedTime());
        $this->assertIsInt($invoice->getExpirationTime());
        $this->assertIsInt($invoice->getMonitoringExpiration());
        $this->assertisString($invoice->getAdditionalStatus());
        $this->assertIsString($invoice->getStatus());
        $this->assertIsArray($invoice->getMetaData());

        // Checkout Options Assertions
        $this->assertInstanceOf(InvoiceCheckoutOptions::class, $invoice->getCheckoutOptions());
        $this->assertIsArray($invoice->getCheckoutOptions()->getPaymentMethods());

        // Assert that RedirectURL is either null or string
        if ($invoice->getCheckoutOptions()->getRedirectURL() !== null) {
            $this->assertIsString($invoice->getCheckoutOptions()->getRedirectURL());
        } else {
            $this->assertNull($invoice->getCheckoutOptions()->getRedirectURL());
        }

        $this->assertIsInt($invoice->getCheckoutOptions()->getExpirationMinutes());
        $this->assertIsInt($invoice->getCheckoutOptions()->getMonitoringMinutes());
        $this->assertIsFloat($invoice->getCheckoutOptions()->getPaymentTolerance());
        $this->assertIsBool($invoice->getCheckoutOptions()->isRedirectAutomatically());

        // Assert that DefaultLanguage is either null or bool
        if ($invoice->getCheckoutOptions()->getDefaultLanguage() !== null) {
            $this->assertIsString($invoice->getCheckoutOptions()->getDefaultLanguage());
        } else {
            $this->assertNull($invoice->getCheckoutOptions()->getDefaultLanguage());
        }
    }

    public function testItCanGetInvoicePaymentMethodsAndGetters(): void
    {
        $paymentMethods = $this->invoiceClient->getPaymentMethods(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId()
        );

        $this->assertIsArray($paymentMethods);

        foreach ($paymentMethods as $paymentMethod) {
            $this->assertInstanceOf(InvoicePaymentMethod::class, $paymentMethod);
            $this->assertIsArray($paymentMethod->getPayments());
            $this->assertIsString($paymentMethod->getPaymentMethod());
            $this->assertIsString($paymentMethod->getDestination());
            $this->assertIsString($paymentMethod->getRate());
            $this->assertIsString($paymentMethod->getPaymentMethodPaid());
            $this->assertIsString($paymentMethod->getTotalPaid());
            $this->assertIsString($paymentMethod->getDue());
            $this->assertIsString($paymentMethod->getAmount());
            $this->assertIsString($paymentMethod->getNetworkFee());
            $this->assertIsString($paymentMethod->getCryptoCode());
        }
    }

    public function testItCanUpdateAnInvoice(): void
    {
        $invoice = $this->invoiceClient->updateInvoice(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId(),
            metaData: [
                'user_id' => '987654321',
            ],
        );

        $this->assertIsArray($invoice->getMetaData());
        $this->assertEquals('987654321', $invoice->getMetaData()['user_id']);

        $this->assertInvoiceGettersAreSet($invoice);
    }

    public function testItCanMarkInvoiceStatus(): void
    {
        $invoice = $this->invoiceClient->markInvoiceStatus(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId(),
            markAs: 'Invalid'
        );

        $this->assertInvoiceGettersAreSet($invoice);

        $this->assertEquals('Invalid', $invoice->getStatus());

        $invoice = $this->invoiceClient->markInvoiceStatus(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId(),
            markAs: 'Settled'
        );

        $this->assertEquals('Settled', $invoice->getStatus());
    }

    public function testItCanArchiveAndUnarchiveAnInvoice(): void
    {
        $archiveInvoice = $this->invoiceClient->archiveInvoice(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId()
        );

        $this->assertTrue($archiveInvoice);

        // Get the invoice again as a new object with hydrated properties.
        $invoice = $this->invoiceClient->getInvoice(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId()
        );

        $this->assertTrue($invoice->isArchived());

        $unarchiveInvoice = $this->invoiceClient->unarchiveInvoice(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId()
        );

        $this->assertTrue($unarchiveInvoice);

        // Get the invoice again as a new object with hydrated properties.
        $invoice = $this->invoiceClient->getInvoice(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId()
        );

        $this->assertFalse($invoice->isArchived());
    }

    public function testItCanActivatePaymentMethod(): void
    {
        $activatePaymentMethod = $this->invoiceClient->activatePaymentMethod(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId(),
            paymentMethod: 'BTC-LightningNetwork'
        );

        $this->assertTrue($activatePaymentMethod);
    }

    public function tearDown(): void
    {
        $achivedInvoice = $this->invoiceClient->archiveInvoice(
            storeId: $this->storeId,
            invoiceId: $this->resultInvoice->getId()
        );

        $this->assertIsBool($achivedInvoice);
    }
}
