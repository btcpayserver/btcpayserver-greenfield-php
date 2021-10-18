<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Result\InvoicePaymentMethod;
use BTCPayServer\Util\PreciseNumber;

class Invoice extends AbstractClient
{
    public function createInvoice(
        string $storeId,
        string $currency,
        ?PreciseNumber $amount = null,
        ?string $orderId = null,
        ?string $buyerEmail = null,
        ?array $metaData = null,
        ?InvoiceCheckoutOptions $checkoutOptions = null
    ): \BTCPayServer\Result\Invoice {
        $url = $this->getApiUrl() . 'stores/' . urlencode(
            $storeId
        ) . '/invoices';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        // Prepare metadata.
        $metaDataMerged = [];

        // Set metaData if any.
        if ($metaData) {
            $metaDataMerged = $metaData;
        }

        // $orderId and $buyerEmail are checked explicitly as they are optional.
        // Make sure that both are only passed either as param or via metadata array.
        if ($orderId) {
            if (array_key_exists('orderId', $metaDataMerged)) {
                throw new \InvalidArgumentException('You cannot pass $orderId and define it in the metadata array as it is ambiguous.');
            }
            $metaDataMerged['orderId'] = $orderId;
        }
        if ($buyerEmail) {
            if (array_key_exists('buyerEmail', $metaDataMerged)) {
                throw new \InvalidArgumentException('You cannot pass $buyerEmail and define it in the metadata array as it is ambiguous.');
            }
            $metaDataMerged['buyerEmail'] = $buyerEmail;
        }

        $body = json_encode(
            [
                'amount' => $amount !== null ? $amount->__toString() : null,
                'currency' => $currency,
                'metadata' => !empty($metaDataMerged) ? $metaDataMerged : null,
                'checkout' => $checkoutOptions ? $checkoutOptions->toArray() : null
            ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\Invoice(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getInvoice(
        string $storeId,
        string $invoiceId
    ): \BTCPayServer\Result\Invoice {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/invoices/' . urlencode($invoiceId);
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\Invoice(json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR));
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getAllInvoices(string $storeId): \BTCPayServer\Result\InvoiceList
    {
        return $this->_getAllInvoicesWithFilter($storeId, null);
    }

    public function getInvoicesByOrderIds(string $storeId, array $orderIds): \BTCPayServer\Result\InvoiceList
    {
        return $this->_getAllInvoicesWithFilter($storeId, $orderIds);
    }

    private function _getAllInvoicesWithFilter(
        string $storeId,
        array $filterByOrderIds = null
    ): \BTCPayServer\Result\InvoiceList {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/invoices?';
        if ($filterByOrderIds !== null) {
            foreach ($filterByOrderIds as $filterByOrderId) {
                $url .= 'orderId=' . urlencode($filterByOrderId) . '&';
            }
        }

        // Clean URL
        $url = rtrim($url, '&');
        $url = rtrim($url, '?');

        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\InvoiceList(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * @return InvoicePaymentMethod[]
     */
    public function getPaymentMethods(string $storeId, string $invoiceId): array
    {
        $method = 'GET';
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/invoices/' . urlencode($invoiceId) . '/payment-methods';
        $headers = $this->getRequestHeaders();
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode(
                $response->getBody(),
                true,
                512,
                JSON_THROW_ON_ERROR
            );
            foreach ($data as $item) {
                $item = new \BTCPayServer\Result\InvoicePaymentMethod($item);
                $r[] = $item;
            }
            return $r;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function markInvoiceStatus(string $storeId, string $invoiceId, string $markAs): \BTCPayServer\Result\Invoice
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode(
            $storeId
        ) . '/invoices/' . urlencode($invoiceId) . '/status';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            [
                'status' => $markAs
            ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\Invoice(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
