<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class Webhook extends AbstractResult
{
    public function getId(): string
    {
        $data = $this->getData();
        return $data['id'];
    }

    public function isEnabled(): bool
    {
        $data = $this->getData();
        return $data['enabled'];
    }

    public function hasAutomaticRedelivery(): bool
    {
        $data = $this->getData();
        return $data['automaticRedelivery'];
    }

    public function getUrl(): string
    {
        $data = $this->getData();
        return $data['url'];
    }

    public function getAuthorizedEvents(): WebhookAuthorizedEventList
    {
        $data = $this->getData();
        return new WebhookAuthorizedEventList($data['authorizedEvents']);
    }

    public function getSecret(): string
    {
        $data = $this->getData();
        return $data['secret'];
    }
}
