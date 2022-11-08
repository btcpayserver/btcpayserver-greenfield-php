<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class InvoiceCheckoutHtml
{
    /**
     * @var string
     */
    private $html;

    public function __construct(string $html)
    {
        $this->html = $html;
    }

    public function getHtml(): string
    {
        return $this->html;
    }

    public function __toString()
    {
        return $this->html;
    }
}
