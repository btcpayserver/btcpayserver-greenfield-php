<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class InvoiceList extends AbstractListResult
{
    /**
     * @return \BTCPayServer\Result\Invoice[]
     */
    public function getInvoices(): array
    {
        $r = [];
        foreach ($this->getData() as $invoiceData) {
            $r[] = new \BTCPayServer\Result\Invoice($invoiceData);
        }
        return $r;
    }

    /**
     * @return \BTCPayServer\Result\Invoice[]
     */
    public function getInvoicesByStatus(string $status): array
    {
        $r = array_filter(
            $this->getInvoices(),
            function (\BTCPayServer\Result\Invoice $invoice) use ($status) {
                return $invoice->getStatus() === $status;
            }
        );

        // Renumber results
        return array_values($r);
    }
}
