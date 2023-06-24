<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class ServerSyncStatus extends AbstractResult
{
    public function getChainHeight(): int
    {
        return $this->getData()['chainHeight'];
    }

    public function getSyncHeight(): int
    {
        return $this->getData()['syncHeight'];
    }

    public function getNodeInformation(): ServerSyncStatusNodeInformation
    {
        return new ServerSyncStatusNodeInformation($this->getData()['nodeInformation']);
    }

    public function getCryptoCode(): string
    {
        return $this->getData()['cryptoCode'];
    }

    public function isAvailable(): bool
    {
        return $this->getData()['available'];
    }
}
