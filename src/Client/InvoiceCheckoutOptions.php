<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

class InvoiceCheckoutOptions
{

    /** @var string */
    protected $speedPolicy;

    /** @var array */
    protected $paymentMethods;

    /** @var int */
    protected $expirationMinutes;

    /** @var int */
    protected $monitoringMinutes;

    /** @var int */
    protected $paymentTolerance;

    /** @var string */
    protected $redirectURL;

    /** @var bool */
    protected $redirectAutomatically;

    /** @var string */
    protected $defaultLanguage;

    public function create(
      ?string $speedPolicy,
      ?array $paymentMethods,
      ?int $expirationMinutes,
      ?int $monitoringMinutes,
      ?int $paymentTolerance,
      ?string $redirectURL,
      ?bool $redirectAutomatically,
      ?string $defaultLanguage
    ) {
        $this->speedPolicy = $speedPolicy;
        $this->paymentMethods = $paymentMethods;
        $this->expirationMinutes = $expirationMinutes;
        $this->monitoringMinutes = $monitoringMinutes;
        $this->paymentTolerance = $paymentTolerance;
        $this->redirectURL = $redirectURL;
        $this->redirectAutomatically = $redirectAutomatically;
        $this->defaultLanguage = $defaultLanguage;
    }

    /**
     * @return string
     */
    public function getSpeedPolicy(): ?string
    {
        return $this->speedPolicy;
    }

    /**
     * @param string $speedPolicy
     *
     * @return InvoiceCheckoutOptions
     */
    public function setSpeedPolicy(?string $speedPolicy): InvoiceCheckoutOptions
    {
        $this->speedPolicy = $speedPolicy;
        return $this;
    }

    /**
     * @return array
     */
    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

    /**
     * @param array $paymentMethods
     *
     * @return InvoiceCheckoutOptions
     */
    public function setPaymentMethods(?array $paymentMethods
    ): InvoiceCheckoutOptions {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMinutes(): ?int
    {
        return $this->expirationMinutes;
    }

    /**
     * @param int $expirationMinutes
     *
     * @return InvoiceCheckoutOptions
     */
    public function setExpirationMinutes(?int $expirationMinutes
    ): InvoiceCheckoutOptions {
        $this->expirationMinutes = $expirationMinutes;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonitoringMinutes(): ?int
    {
        return $this->monitoringMinutes;
    }

    /**
     * @param int $monitoringMinutes
     *
     * @return InvoiceCheckoutOptions
     */
    public function setMonitoringMinutes(?int $monitoringMinutes
    ): InvoiceCheckoutOptions {
        $this->monitoringMinutes = $monitoringMinutes;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTolerance(): ?int
    {
        return $this->paymentTolerance;
    }

    /**
     * @param int $paymentTolerance
     *
     * @return InvoiceCheckoutOptions
     */
    public function setPaymentTolerance(?int $paymentTolerance
    ): InvoiceCheckoutOptions {
        $this->paymentTolerance = $paymentTolerance;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectURL(): ?string
    {
        return $this->redirectURL;
    }

    /**
     * @param string $redirectURL
     *
     * @return InvoiceCheckoutOptions
     */
    public function setRedirectURL(?string $redirectURL): InvoiceCheckoutOptions
    {
        $this->redirectURL = $redirectURL;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRedirectAutomatically(): ?bool
    {
        return $this->redirectAutomatically;
    }

    /**
     * @param bool $redirectAutomatically
     *
     * @return InvoiceCheckoutOptions
     */
    public function setRedirectAutomatically(?bool $redirectAutomatically
    ): InvoiceCheckoutOptions {
        $this->redirectAutomatically = $redirectAutomatically;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }

    /**
     * @param string $defaultLanguage
     *
     * @return InvoiceCheckoutOptions
     */
    public function setDefaultLanguage(?string $defaultLanguage
    ): InvoiceCheckoutOptions {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }
}

