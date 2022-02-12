<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class StoreOnChainWalletUTXOList extends AbstractListResult
{
    /**
     * @return \BTCPayServer\Result\StoreOnChainWalletUTXO[]
     */
    public function all(): array
    {
        $storeWalletUTXOS = [];
        foreach ($this->getData() as $storeWalletUTXO) {
            $storeWalletUTXOS[] = new \BTCPayServer\Result\StoreOnChainWalletUTXO($storeWalletUTXO);
        }
        return $storeWalletUTXOS;
    }
}
