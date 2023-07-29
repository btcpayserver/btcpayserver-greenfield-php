<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

use BTCPayServer\Util\PreciseNumber;

class StoreOnChainWalletFeeRate extends AbstractResult
{
    public function getFeeRate(): PreciseNumber
    {
        $data = $this->getData();
        return PreciseNumber::parseFloat($data['feeRate']);
    }
}
