<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class OfferingPlan extends AbstractResult
{
    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getName(): string
    {
        return $this->data['name'];
    }

    public function getStatus(): string
    {
        return $this->data['status'];
    }

    public function getPrice(): string
    {
        return $this->data['price'];
    }

    public function getCurrency(): string
    {
        return $this->data['currency'];
    }

    public function getRecurringType(): string
    {
        return $this->data['recurringType'];
    }

    public function getGracePeriodDays(): int
    {
        return $this->data['gracePeriodDays'];
    }

    public function getTrialDays(): int
    {
        return $this->data['trialDays'];
    }

    public function getDescription(): string
    {
        return $this->data['description'];
    }

    public function getMemberCount(): int
    {
        return $this->data['memberCount'];
    }

    public function isOptimisticActivation(): bool
    {
        return $this->data['optimisticActivation'];
    }

    public function isRenewable(): bool
    {
        return $this->data['renewable'];
    }

    /**
     * @return string[]
     */
    public function getFeatures(): array
    {
        return $this->data['features'] ?? [];
    }

    public function getMetadata(): ?array
    {
        return $this->data['metadata'] ?? null;
    }
}
