<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class Offering extends AbstractResult
{
    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getStoreId(): string
    {
        return $this->data['storeId'];
    }

    public function getAppId(): ?string
    {
        return $this->data['appId'] ?? null;
    }

    public function getAppName(): ?string
    {
        return $this->data['appName'] ?? null;
    }

    public function getSuccessRedirectUrl(): ?string
    {
        return $this->data['successRedirectUrl'] ?? null;
    }

    public function getMetadata(): ?array
    {
        return $this->data['metadata'] ?? null;
    }

    /**
     * @return OfferingPlan[]
     */
    public function getPlans(): array
    {
        $plans = [];
        if (isset($this->data['plans']) && is_array($this->data['plans'])) {
            foreach ($this->data['plans'] as $plan) {
                $plans[] = new OfferingPlan($plan);
            }
        }
        return $plans;
    }

    /**
     * @return Feature[]
     */
    public function getFeatures(): array
    {
        $features = [];
        if (isset($this->data['features']) && is_array($this->data['features'])) {
            foreach ($this->data['features'] as $feature) {
                $features[] = new Feature($feature);
            }
        }
        return $features;
    }
}
