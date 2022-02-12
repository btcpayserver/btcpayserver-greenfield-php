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
     * DEPRECATED: Please use `all()`.
     * TODO: Remove during next backwards compatibility break.
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
