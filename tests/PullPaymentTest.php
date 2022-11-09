<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\PullPayment;
use BTCPayServer\Result\PullPayment as ResultPullPayment;
use BTCPayServer\Result\PullPaymentList;
use BTCPayServer\Result\PullPaymentPayout;
use BTCPayServer\Util\PreciseNumber;

final class PullPaymentTest extends BaseTest
{
    public function setUp(): void
    {
        parent::setUp();

        $this->pullPaymentClient = new PullPayment($this->host, $this->apiKey);
    }

    /** @group createPullPayment */
    public function testCreatePullPayment(): void
    {
        $pullPayment = $this->pullPaymentClient->createPullPayment(
            storeId: $this->storeId,
            name: 'Test Pull Payment',
            amount: PreciseNumber::parseString('100'),
            currency: 'SATS',
            period: 30,
            BOLT11Expiration: 30,
            autoApproveClaims: false,
            startsAt: time(),
            expiresAt: time() + 30,
            paymentMethods: ['BTC-LightningNetwork']
        );

        $this->assertInstanceOf(ResultPullPayment::class, $pullPayment);
        $this->assertNotEmpty($pullPayment->getId());
        $this->assertEquals('Test Pull Payment', $pullPayment->getName());
        $this->assertEquals('SATS', $pullPayment->getCurrency());
        $this->assertEquals('100', $pullPayment->getAmount());
        $this->assertEquals(30, $pullPayment->getPeriod());
        $this->assertEquals(30, $pullPayment->getBOLT11Expiration());
        $this->assertFalse($pullPayment->isArchived());
        $this->assertNotEmpty($pullPayment->getViewLink());
    }

    /** @group getStorePullPayments */
    public function testGetStorePullPayments(): void
    {
        $pullPayments = $this->pullPaymentClient->getStorePullPayments($this->storeId, false);

        $this->assertInstanceOf(PullPaymentList::class, $pullPayments);
        $this->assertNotEmpty($pullPayments->all());
        $this->assertIsArray($pullPayments->all());

        foreach ($pullPayments->all() as $pullPayment) {
            $this->assertInstanceOf(ResultPullPayment::class, $pullPayment);
            $this->assertIsString($pullPayment->getId());
            $this->assertIsString($pullPayment->getName());
            $this->assertIsString($pullPayment->getCurrency());
            $this->assertInstanceOf(PreciseNumber::class, $pullPayment->getAmount());
            $this->assertIsInt($pullPayment->getPeriod());
            $this->assertIsInt($pullPayment->getBOLT11Expiration());
            $this->assertIsBool($pullPayment->isArchived());
            $this->assertIsString($pullPayment->getViewLink());
        }
    }

    /** @group getPullPayment */
    public function testGetPullPayment(): void
    {
        $pullPayments = $this->pullPaymentClient->getStorePullPayments($this->storeId, false);
        $pullPayment = $this->pullPaymentClient->getPullPayment($pullPayments->all()[0]->getId());

        $this->assertInstanceOf(ResultPullPayment::class, $pullPayment);
        $this->assertIsString($pullPayment->getId());
        $this->assertIsString($pullPayment->getName());
        $this->assertIsString($pullPayment->getCurrency());
        $this->assertInstanceOf(PreciseNumber::class, $pullPayment->getAmount());
        $this->assertIsInt($pullPayment->getPeriod());
        $this->assertIsInt($pullPayment->getBOLT11Expiration());
        $this->assertIsBool($pullPayment->isArchived());
        $this->assertIsString($pullPayment->getViewLink());
    }

    /** @group archivePullPayment */
    public function testArchivePullPayment(): void
    {
        // Grab the first unarchived pull payment and archive it.
        $pullPayment = $this->pullPaymentClient->getStorePullPayments($this->storeId, false)->all()[0];
        $this->pullPaymentClient->archivePullPayment($this->storeId, $pullPayment->getId());

        // Get All Pull Payments, including archived, as an array.
        $allPullPayments = $this->pullPaymentClient->getStorePullPayments($this->storeId, true)->all();

        // Find the the archived pull payment by id.
        $archivedPullPayment = array_filter($allPullPayments, function ($pullPayment) {
            return $pullPayment->getId() === $pullPayment->getId();
        });

        // Assert that the pull payment is archived.
        $this->assertTrue($archivedPullPayment[0]->isArchived());
    }

    /** @group payouts */
    public function testAllPayoutMethods(): void
    {
        // Create a pull payment.
        $pullPayment = $this->pullPaymentClient->createPullPayment(
            storeId: $this->storeId,
            name: 'Test Pull Payment',
            amount: PreciseNumber::parseFloat(0.00001),
            currency: 'BTC',
            period: 1,
            BOLT11Expiration: 1,
            autoApproveClaims: false,
            startsAt: time(),
            expiresAt: time() + 100,
            paymentMethods: ['BTC-LightningNetwork']
        );

        // Create a payout associated with the pull payment.
        $payout = $this->pullPaymentClient->createPayout(
            pullPaymentId: $pullPayment->getId(),
            destination: 'lntb10u1p3kc0z6pp5tdkj8cs9fgw83rep03t3veqre8s89z626cvrynst4j5tlvqmnrjsdq8xycrqvqcqzpgxqy7sjqsp5ff38cafky3pjtv5wajk3uraqdy7pghwqce9x63sqdefknc8hrq7q9qyyssq93e88ve2hzevdm6j3ar64qmfg7vym3ugfzz2444efz8mrjacq47zy4fl0j0687jr20k26c9rmz5ytrxfgvp49lnk633d5x9pcg794zgpgyyam0',
            amount: PreciseNumber::parseFloat(0.00001),
            paymentMethod: 'BTC-LightningNetwork'
        );

        $this->assertInstanceOf(PullPaymentPayout::class, $payout);
        $this->assertIsString($payout->getId());
        $this->assertIsInt($payout->getRevision());
        $this->assertIsString($payout->getPullPaymentId());
        $this->assertIsInt($payout->getDate());
        $this->assertIsString($payout->getDestination());
        $this->assertInstanceOf(PreciseNumber::class, $payout->getAmount());
        $this->assertIsString($payout->getPaymentMethod());
        $this->assertIsString($payout->getCryptoCode());
        $this->assertIsString($payout->getState());
        $this->assertEquals('AwaitingApproval', $payout->getState());

        // If PaymentMethodAmount is not null, assert it's an int.
        if ($payout->getPaymentMethodAmount() !== null) {
            $this->assertIsInt($payout->getPaymentMethodAmount());
        }

        // Test that we can get the payout.
        $getPayout = $this->pullPaymentClient->getPayout($pullPayment->getId(), $payout->getId());

        // Assert that the payout is the same as the one we created.
        $this->assertEquals($payout, $getPayout);

        // Approve the payout.
        $approve = $this->pullPaymentClient->approvePayout(
            storeId: $this->storeId,
            payoutId: $payout->getId(),
            revision: $payout->getRevision(),
            rateRule: null,
        );

        $this->assertInstanceOf(PullPaymentPayout::class, $approve);
        $this->assertEquals('AwaitingPayment', $approve->getState());

        // Mark the Payout as Paid.
        $paid = $this->pullPaymentClient->markPayoutAsPaid(
            storeId: $this->storeId,
            payoutId: $payout->getId(),
        );

        $this->assertTrue($paid);

        // Cancel the payout
        $cancel = $this->pullPaymentClient->cancelPayout($this->storeId, $payout->getId());
        $this->assertTrue($cancel);

        // Archive the new pull payment.
        $archive = $this->pullPaymentClient->archivePullPayment($this->storeId, $pullPayment->getId());
        $this->assertTrue($archive);
    }
}
