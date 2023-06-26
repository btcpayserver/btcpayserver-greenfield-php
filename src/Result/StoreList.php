<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class StoreList extends AbstractListResult
{
    /**
     * @return Store[]
     */
    public function all(): array
    {
        $stores = [];
        foreach ($this->getData() as $store) {
            $stores[] = new Store($store);
        }
        return $stores;
    }
}
