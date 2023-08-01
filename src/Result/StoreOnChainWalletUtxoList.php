<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class StoreOnChainWalletUtxoList extends AbstractListResult
{
    /**
     * @return \BTCPayServer\Result\StoreOnChainWalletUtxo[]
     */
    public function all(): array
    {
        $storeWalletUtxos = [];
        foreach ($this->getData() as $storeWalletUtxo) {
            $storeWalletUtxos[] = new StoreOnChainWalletUtxo($storeWalletUtxo);
        }
        return $storeWalletUtxos;
    }
}
