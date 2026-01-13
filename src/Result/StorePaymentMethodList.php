<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class StorePaymentMethodList extends AbstractListResult
{
    /**
     * @return AbstractStorePaymentMethodResult[]
     */
    public function all(): array
    {
        $r = [];
        foreach ($this->getData() as $paymentMethod => $paymentMethodData) {
            // Consistency: Flatten the array to be consistent with the specific
            // payment method endpoints.
            $paymentMethodData += $paymentMethodData['data'];
            unset($paymentMethodData['data']);

            $r[] = new StorePaymentMethod($paymentMethodData, $paymentMethod);
        }
        return $r;
    }
}
