<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

use BTCPayServer\Util\PreciseNumber;

class PullPayment extends AbstractResult
{
    public function getName(): string
    {
        $data = $this->getData();
        return $data['name'];
    }

    public function getAmount(): PreciseNumber
    {
        $data = $this->getData();
        return PreciseNumber::parseString($data['amount']);
    }

    public function getCurrency(): string
    {
        $data = $this->getData();
        return $data['currency'];
    }

    public function getBOLT11Expiration(): int
    {
        $data = $this->getData();
        return $data['BOLT11Expiration'];
    }

    public function getPeriod(): int
    {
        $data = $this->getData();
        return $data['period'];
    }

    public function getStartsAt(): int
    {
        $data = $this->getData();
        return $data['startsAt'];
    }

    public function getExpiresAt(): int
    {
        $data = $this->getData();
        return $data['expiresAt'];
    }
    /**
     * @return StorePaymentMethodCollection[]
     */
    public function getPaymentMethods(): StorePaymentMethodCollection
    {
        $data = $this->getData();
        return new StorePaymentMethodCollection($data['paymentMethods']);
    }
}
