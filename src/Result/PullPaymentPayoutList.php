<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class PullPaymentPayoutList extends AbstractListResult
{
    /**
     * @return \BTCPayServer\Result\PullPaymentPayout[]
     */
    public function getPullPaymentPayouts(): array
    {
        $pullPaymentPayouts = [];
        foreach ($this->getData() as $pullPaymentPayoutData) {
            $pullPaymentPayouts[] = new \BTCPayServer\Result\PullPaymentPayout($pullPaymentPayoutData);
        }
        return $pullPaymentPayouts;
    }
}