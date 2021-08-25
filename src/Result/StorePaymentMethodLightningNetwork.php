<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class StorePaymentMethodLightningNetwork extends AbstractResult
{
    public function __construct(array $data, $paymentMethod = null)
    {
        // Temporary workaround until the api provides paymentMethod.
        if (!isset($data['paymentMethod'])) {
            $data['paymentMethod'] = $paymentMethod;
        }

        parent::__construct($data);
    }
}
