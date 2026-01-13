<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class PlanCheckout extends AbstractResult
{
    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getSubscriber(): ?Subscriber
    {
        return isset($this->data['subscriber']) ? new Subscriber($this->data['subscriber']) : null;
    }

    public function getPlan(): OfferingPlan
    {
        return new OfferingPlan($this->data['plan']);
    }

    public function getBaseUrl(): string
    {
        return $this->data['baseUrl'];
    }

    public function getInvoiceId(): ?string
    {
        return $this->data['invoiceId'] ?? null;
    }

    public function getSuccessRedirectUrl(): ?string
    {
        return $this->data['successRedirectUrl'] ?? null;
    }

    public function getExpiration(): int
    {
        return $this->data['expiration'];
    }

    public function getRedirectUrl(): string
    {
        return $this->data['redirectUrl'];
    }

    public function getInvoiceMetadata(): ?array
    {
        return $this->data['invoiceMetadata'] ?? null;
    }

    public function getMetadata(): ?array
    {
        return $this->data['metadata'] ?? null;
    }

    public function isNewSubscriber(): bool
    {
        return $this->data['newSubscriber'];
    }

    public function isTrial(): bool
    {
        return $this->data['isTrial'];
    }

    public function getCreated(): int
    {
        return $this->data['created'];
    }

    public function isPlanStarted(): bool
    {
        return $this->data['planStarted'];
    }

    public function getNewSubscriberMetadata(): ?array
    {
        return $this->data['newSubscriberMetadata'] ?? null;
    }

    public function getRefundAmount(): ?string
    {
        return $this->data['refundAmount'] ?? null;
    }

    public function getCreditedByInvoice(): ?string
    {
        return $this->data['creditedByInvoice'] ?? null;
    }

    public function getOnPayBehavior(): ?string
    {
        return $this->data['onPayBehavior'] ?? null;
    }

    public function isExpired(): bool
    {
        return $this->data['isExpired'];
    }

    public function getUrl(): string
    {
        return $this->data['url'];
    }

    public function getCreditPurchase(): ?string
    {
        return $this->data['creditPurchase'] ?? null;
    }
}
