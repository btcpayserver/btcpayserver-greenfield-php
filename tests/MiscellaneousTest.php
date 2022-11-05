<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Invoice;
use BTCPayServer\Client\Miscellaneous;
use BTCPayServer\Result\LanguageCode;
use BTCPayServer\Result\LanguageCodeList;
use BTCPayServer\Result\PermissionMetadata;
use BTCPayServer\Result\PermissionMetadataList;
use BTCPayServer\Util\PreciseNumber;

final class MiscellaneousTest extends BaseTest
{
    private Miscellaneous $miscellaneousClient;

    public function setUp(): void
    {
        parent::setUp();

        $this->miscellaneousClient = new Miscellaneous($this->host, $this->apiKey);
    }

    public function testItCanGetPermissionMetadata(): void
    {
        $result = $this->miscellaneousClient->getPermissionMetadata();

        $this->assertInstanceOf(PermissionMetadataList::class, $result);

        foreach($result->all() as $permissionMetadata) {
            $this->assertInstanceOf(PermissionMetadata::class, $permissionMetadata);
            $this->assertIsString($permissionMetadata->getName());
            $this->assertIsArray($permissionMetadata->getIncluded());
        }

    }

    public function testItCanGetLanguageCodes(): void
    {
        $result = $this->miscellaneousClient->getLanguageCodes();

        $this->assertInstanceOf(LanguageCodeList::class, $result);

        foreach($result->all() as $languageCode) {
            $this->assertInstanceOf(LanguageCode::class, $languageCode);
            $this->assertIsString($languageCode->getCode());
            $this->assertIsString($languageCode->getCurrentLanguage());
        }
    }

    public function testItCanGetInvoiceCheckout(): void
    {
        $invoiceClient = new Invoice($this->host, $this->apiKey);

        $invoice = $invoiceClient->createInvoice(
            storeId: $this->storeId,
            currency: 'SATS',
            amount: PreciseNumber::parseString('1000'),
        );

        $result = $this->miscellaneousClient->getInvoiceCheckout($invoice->getId(), null);

        $this->assertStringContainsString('<!DOCTYPE html>', $result);
    }
}