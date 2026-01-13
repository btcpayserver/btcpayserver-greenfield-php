<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class Subscriber extends AbstractResult
{
    public function getCreated(): int
    {
        return $this->data['created'];
    }

    public function getCustomer(): Customer
    {
        return new Customer($this->data['customer']);
    }

    public function getOffering(): Offering
    {
        return new Offering($this->data['offering']);
    }

    public function getPlan(): OfferingPlan
    {
        return new OfferingPlan($this->data['plan']);
    }

    public function getPeriodEnd(): ?int
    {
        return $this->data['periodEnd'] ?? null;
    }

    public function getTrialEnd(): ?int
    {
        return $this->data['trialEnd'] ?? null;
    }

    public function getGracePeriodEnd(): ?int
    {
        return $this->data['gracePeriodEnd'] ?? null;
    }

    public function isActive(): bool
    {
        return $this->data['isActive'];
    }

    public function isSuspended(): bool
    {
        return $this->data['isSuspended'];
    }

    public function getSuspensionReason(): ?string
    {
        return $this->data['suspensionReason'] ?? null;
    }

    public function isAutoRenew(): bool
    {
        return $this->data['autoRenew'];
    }

    public function getMetadata(): ?array
    {
        return $this->data['metadata'] ?? null;
    }

    public function getProcessingInvoiceId(): ?string
    {
        return $this->data['processingInvoiceId'] ?? null;
    }

    public function getNextPlan(): ?OfferingPlan
    {
        return isset($this->data['nextPlan']) ? new OfferingPlan($this->data['nextPlan']) : null;
    }

    public function getPhase(): string
    {
        return $this->data['phase'];
    }
}
