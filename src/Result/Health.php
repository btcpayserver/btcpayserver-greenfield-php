<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class Health extends AbstractResult
{
    public function isSyncronized(): bool
    {
        $data = $this->getData();
        return $data['synchronized'];
    }
}
