<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class WebhookAuthorizedEventList extends AbstractListResult
{
    /**
     * @return \BTCPayServer\Result\WebhookAuthorizedEvent[]
     */
    public function getWebhooks(): array
    {
        $authorizedEvents = [];
        foreach ($this->getData() as $authorizedEvent) {
            $authorizedEvents[] = new \BTCPayServer\Result\WebhookAuthorizedEvent($authorizedEvent);
        }
        return $authorizedEvents;
    }
}
