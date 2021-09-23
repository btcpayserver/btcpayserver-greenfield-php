<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class StorePaymentMethodOnChain extends AbstractStorePaymentMethodResult
{
    public function isEnabled(): bool
    {
        $data = $this->getData();
        return $data['enabled'];
    }
}
