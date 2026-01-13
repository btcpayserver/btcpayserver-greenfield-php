<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class PortalSession extends AbstractResult
{
    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getBaseUrl(): string
    {
        return $this->data['baseUrl'];
    }

    public function getSubscriber(): Subscriber
    {
        return new Subscriber($this->data['subscriber']);
    }

    public function getExpiration(): ?int
    {
        return $this->data['expiration'] ?? null;
    }

    public function isExpired(): bool
    {
        return $this->data['isExpired'];
    }

    public function getUrl(): string
    {
        return $this->data['url'];
    }
}
