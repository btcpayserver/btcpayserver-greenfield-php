<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class InvoiceList extends AbstractListResult
{
    /**
     * @return \BTCPayServer\Result\Invoice[]
     */
    public function all(): array
    {
        $invoices = [];
        foreach ($this->getData() as $invoice) {
            $invoices[] = new \BTCPayServer\Result\Invoice($invoice);
        }
        return $invoices;
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

    /**
     * @deprecated 2.0.0 Please use `all()` instead.
     * @see all()
     *
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
}
