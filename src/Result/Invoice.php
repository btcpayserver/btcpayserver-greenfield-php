<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

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
