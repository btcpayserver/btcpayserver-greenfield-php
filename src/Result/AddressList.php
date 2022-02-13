<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class AddressList extends \BTCPayServer\Result\AbstractListResult
{
    public function all(): array
    {
        $r = [];
        foreach ($this->getData()['addresses'] as $addressData) {
            $r[] = new \BTCPayServer\Result\Address($addressData);
        }
        return $r;
    }

    /**
     * @deprecated 2.0.0 Please use `all()` instead.
     * @see all()
     *
     * @return \BTCPayServer\Result\Address[]
     */
    public function getAddresses(): array
    {
        $r = [];
        foreach ($this->getData()['addresses'] as $addressData) {
            $r[] = new \BTCPayServer\Result\Address($addressData);
        }
        return $r;
    }
}
