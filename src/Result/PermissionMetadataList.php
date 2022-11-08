<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class PermissionMetadataList extends AbstractListResult
{
    /**
     * @return PermissionMetadata[]
     */
    public function all(): array
    {
        $permissionMetadataList = [];
        foreach ($this->getData() as $permissionMetadata) {
            $permissionMetadataList[] = new PermissionMetadata($permissionMetadata);
        }
        return $permissionMetadataList;
    }
}
