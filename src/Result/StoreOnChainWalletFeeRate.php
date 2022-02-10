<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class StoreOnChainWalletFeeRate extends AbstractResult
{
    public function getFeeRate(): int
    {
        $data = $this->getData();
        return $data['feeRate'];
    }
}
