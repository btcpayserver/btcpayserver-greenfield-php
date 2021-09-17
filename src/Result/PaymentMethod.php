<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class PaymentMethod extends AbstractResult
{
    /**
     * @return Payment[]
     */
    public function getPayments(): array
    {
        $r = [];
        $data = $this->getData();
        foreach ($data['payments'] as $payment) {
            $r[] = new \BTCPayServer\Result\Payment($payment);
        }

        return $r;
    }

    public function getDestination(): string
    {
        $data = $this->getData();
        return $data['destination'];
    }

    public function getRate(): string
    {
        $data = $this->getData();
        return $data['rate'];
    }

    public function getPaymentMethodPaid(): string
    {
        $data = $this->getData();
        return $data['paymentMethodPaid'];
    }

    public function getTotalPaid(): string
    {
        $data = $this->getData();
        return $data['totalPaid'];
    }

    public function getDue(): string
    {
        $data = $this->getData();
        return $data['due'];
    }

    public function getAmount(): string
    {
        $data = $this->getData();
        return $data['amount'];
    }

    public function getNetworkFee(): string
    {
        $data = $this->getData();
        return $data['networkFee'];
    }

    public function getPaymentMethod(): string
    {
        $data = $this->getData();
        return $data['paymentMethod'];
    }
}
