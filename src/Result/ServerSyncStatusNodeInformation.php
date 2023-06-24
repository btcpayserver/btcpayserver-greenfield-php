<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

use BTCPayServer\Util\PreciseNumber;

class ServerSyncStatusNodeInformation extends AbstractResult
{
    public function getHeaders(): int
    {
        return $this->getData()['headers'];
    }

    public function getBlocks(): int
    {
        return $this->getData()['blocks'];
    }

    public function getVerificationProgress(): PreciseNumber
    {
        return PreciseNumber::parseFloat($this->getData()['verificationProgress']);
    }
}
