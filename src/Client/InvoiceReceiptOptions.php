<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

/**
 * Additional settings to customize the public receipt
 */
class InvoiceReceiptOptions
{
    /** @var bool */
    protected $enabled;

    /** @var bool */
    protected $showQR;

    /** @var bool */
    protected $showPayments;

    public static function create(
        ?bool $enabled,
        ?bool $showQR,
        ?bool $showPayments,
    ) {
        $options = new InvoiceReceiptOptions();
        $options->enabled = $enabled;
        $options->showQR = $showQR ?? null;
        $options->showPayments = $showPayments;
        return $options;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }


    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function showsQR(): ?bool
    {
        return $this->showQR;
    }

    public function setShowQR(?bool $showQR): self
    {
        $this->showQR = $showQR;
        return $this;
    }

    public function showsPayments(): ?bool
    {
        return $this->showPayments;
    }

    public function setShowPayments(?bool $showPayments): self
    {
        $this->showPayments = $showPayments;
        return $this;
    }

    /**
     * Converts the whole object incl. protected and private properties to an array.
     */
    public function toArray(): array
    {
        $array = [];
        $objAsArray = (array) $this;
        foreach ($objAsArray as $k => $v) {
            $separator = "\0";
            $k = rtrim($k, $separator);

            $lastIndex = strrpos($k, $separator);
            if ($lastIndex !== false) {
                $k = substr($k, $lastIndex + 1);
            }
            $array[$k] = $v;
        }

        return $array;
    }
}
