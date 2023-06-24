<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

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

    public function getVerificationProgress(): float
    {
        return $this->getData()['verificationProgress'];
    }
}
