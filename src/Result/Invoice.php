<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

use BTCPayServer\Client\InvoiceCheckoutOptions;
use BTCPayServer\Util\PreciseNumber;

class Invoice extends AbstractResult
{
    public const STATUS_NEW = 'New';

    public const STATUS_INVALID = 'Invalid';

    public const STATUS_SETTLED = 'Settled';

    public const STATUS_EXPIRED = 'Expired';

    public const STATUS_PROCESSING = 'Processing';

    public const ADDITIONAL_STATUS_PAID_PARTIAL = 'PaidPartial';

    public const ADDITIONAL_STATUS_PAID_OVER = 'PaidOver';

    public const ADDITIONAL_STATUS_MARKED = 'Marked';

    public const ADDITIONAL_STATUS_PAID_LATE = 'PaidLate';

    public function getMetaData(): array
    {
        return $this->getData()['metadata'];
    }

    public function getId(): string
    {
        return $this->getData()['id'];
    }

    public function getAmount(): PreciseNumber
    {
        return PreciseNumber::parseString($this->getData()['amount']);
    }

    public function getStoreId(): string
    {
        return $this->getData()['storeId'];
    }

    public function getCurrency(): string
    {
        return $this->getData()['currency'];
    }

    public function getType(): string
    {
        return $this->getData()['type'];
    }

    public function getCheckoutLink(): string
    {
        return $this->getData()['checkoutLink'];
    }

    public function getCreatedTime(): int
    {
        return $this->getData()['createdTime'];
    }

    public function getExpirationTime(): int
    {
        return $this->getData()['expirationTime'];
    }

    public function getMonitoringExpiration(): int
    {
        return $this->getData()['monitoringExpiration'];
    }

    public function isArchived(): bool
    {
        return $this->getData()['archived'];
    }

    public function getCheckoutOptions(): InvoiceCheckoutOptions
    {
        $options = new InvoiceCheckoutOptions();
        $options->setSpeedPolicy($this->getData()['checkout']['speedPolicy']);
        $options->setPaymentMethods($this->getData()['checkout']['paymentMethods']);
        $options->setExpirationMinutes($this->getData()['checkout']['expirationMinutes']);
        $options->setMonitoringMinutes($this->getData()['checkout']['monitoringMinutes']);
        $options->setPaymentTolerance($this->getData()['checkout']['paymentTolerance']);
        $options->setRedirectURL($this->getData()['checkout']['redirectURL']);
        $options->setRedirectAutomatically($this->getData()['checkout']['redirectAutomatically']);
        $options->setRequiresRefundEmail($this->getData()['checkout']['requiresRefundEmail']);
        $options->setDefaultLanguage($this->getData()['checkout']['defaultLanguage']);

        return $options;
    }

    public function isPaid(): bool
    {
        $data = $this->getData();
        return $data['status'] === self::STATUS_SETTLED || $data['additionalStatus'] === self::ADDITIONAL_STATUS_PAID_PARTIAL;
    }

    public function isNew(): bool
    {
        $data = $this->getData();
        return $data['status'] === self::STATUS_NEW;
    }

    public function isFullyPaid(): bool
    {
        $data = $this->getData();
        return $data['status'] === self::STATUS_SETTLED;
    }

    public function getStatus(): string
    {
        return $this->getData()['status'];
    }

    public function getAdditionalStatus(): string
    {
        return $this->getData()['additionalStatus'];
    }

    public function isExpired(): bool
    {
        $data = $this->getData();
        return $data['status'] === self::STATUS_EXPIRED;
    }

    public function isProcessing(): bool
    {
        $data = $this->getData();
        return $data['status'] === self::STATUS_PROCESSING;
    }

    public function isInvalid(): bool
    {
        $data = $this->getData();
        return $data['status'] === self::STATUS_INVALID;
    }

    public function isOverpaid(): bool
    {
        $data = $this->getData();
        return $data['additionalStatus'] === self::ADDITIONAL_STATUS_PAID_OVER;
    }

    public function isPartiallyPaid(): bool
    {
        $data = $this->getData();
        return $data['additionalStatus'] === self::ADDITIONAL_STATUS_PAID_PARTIAL;
    }

    public function isMarked(): bool
    {
        $data = $this->getData();
        return $data['additionalStatus'] === self::ADDITIONAL_STATUS_MARKED;
    }

    public function isPaidLate(): bool
    {
        $data = $this->getData();
        return $data['additionalStatus'] === self::ADDITIONAL_STATUS_PAID_LATE;
    }

    /**
     * Get the statuses you can use to manually mark this invoice.
     * Available since BTCPay Server version x.x.x
     * @return string[] Example: ["Settled", "Invalid"]
     */
    public function getAvailableStatusesForManualMarking(): array
    {
        return $this->getData()['availableStatusesForManualMarking'];
    }
}
