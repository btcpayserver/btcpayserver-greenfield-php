<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

use BTCPayServer\Util\PreciseNumber;

class PullPaymentPayout extends AbstractResult
{
    public function getId(): string
    {
        return $this->getData()['id'];
    }

    public function getRevision(): int
    {
        return $this->getData()['revision'];
    }

    public function getPullPaymentId(): string
    {
        return $this->getData()['pullPaymentId'];
    }

    public function getDate(): int
    {
        return $this->getData()['date'];
    }

    public function getDestination(): string
    {
        return $this->getData()['destination'];
    }

    public function getAmount(): PreciseNumber
    {
        return PreciseNumber::parseString($this->getData()['amount']);
    }

    public function getPaymentMethod(): string
    {
        return $this->getData()['paymentMethod'];
    }

    public function getCryptoCode(): string
    {
        return $this->getData()['cryptoCode'];
    }

    public function getPaymentMethodAmount(): ?PreciseNumber
    {
        return (isset($this->getData()['paymentMethodAmount']))
            ? PreciseNumber::parseString($this->getData()['paymentMethodAmount'])
            : null;
    }

    public function getState(): string
    {
        return $this->getData()['state'];
    }
}
