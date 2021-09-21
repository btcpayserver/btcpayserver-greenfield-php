<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class InvoicePayment extends AbstractResult
{
    public function getValue(): string
    {
        $data = $this->getData();
        return $data['value'];
    }

    public function getFee(): string
    {
        $data = $this->getData();
        return $data['fee'];
    }

    public function getDestination(): string
    {
        $data = $this->getData();
        return $data['destination'];
    }

    public function getStatus(): string
    {
        $data = $this->getData();
        return $data['status'];
    }
}
