<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class ServerSyncStatusList extends AbstractResult
{
    /**
     * @return \BTCPayServer\Result\ServerSyncStatus[]
     */
    public function all(): array
    {
        $serverSyncStatuses = [];
        foreach ($this->getData() as $serverSyncStatus) {
            $serverSyncStatuses[] = new \BTCPayServer\Result\ServerSyncStatus($serverSyncStatus);
        }
        return $serverSyncStatuses;
    }
}
