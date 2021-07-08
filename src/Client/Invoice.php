<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\Client;
use BTCPayServer\Result\PaymentMethod;

class Invoice extends AbstractClient
{

    public function getInvoice(string $storeId, string $invoiceId): \BTCPayServer\Result\Invoice
    {
        $url = $this->getBaseUrl() . '/api/v1/stores/' . urlencode($storeId) . '/invoices/' . urlencode($invoiceId);
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = Client::request($method, $url, '', $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\Invoice(json_decode($response->getBody(), true));
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * @param string $storeId
     * @param string $invoiceId
     * @return PaymentMethod[]
     */
    public function getPaymentMethods(string $storeId, string $invoiceId): array
    {
        $method = 'GET';
        $url = $this->getBaseUrl() . '/api/v1/stores/' . urlencode($storeId) . '/invoices/' . urlencode(
                $invoiceId
            ) . '/payment-methods';
        $headers = $this->getRequestHeaders();
        $response = Client::request($method, $url, '', $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode($response->getBody(), true);
            foreach ($data as $item) {
                $item = new \BTCPayServer\Result\PaymentMethod($item);
                $r[] = $item;
            }
            return $r;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

}