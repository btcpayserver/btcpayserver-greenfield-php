<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class Invoice extends AbstractResult
{
    public const STATUS_SETTLED = 'Settled';

    public const ADDITIONAL_STATUS_PAID_PARTIAL = 'PaidPartial';

    public function isPaid(): bool
    {
        $data = $this->getData();
        return $data['status'] === self::STATUS_SETTLED || $data['additionalStatus'] === self::ADDITIONAL_STATUS_PAID_PARTIAL;
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
}
