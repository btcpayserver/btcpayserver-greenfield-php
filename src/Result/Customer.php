<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class Customer extends AbstractResult
{
    public function getStoreId(): string
    {
        return $this->data['storeId'];
    }

    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getExternalId(): ?string
    {
        return $this->data['externalId'] ?? null;
    }

    public function getIdentities(): ?array
    {
        return $this->data['identities'] ?? null;
    }

    public function getMetadata(): ?array
    {
        return $this->data['metadata'] ?? null;
    }
}
