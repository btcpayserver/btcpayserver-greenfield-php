<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\CurlClient;
use BTCPayServer\Result\PaymentMethod;
use BTCPayServer\Util\Formatter;
use BTCPayServer\Util\PreciseNumber;

class Invoice extends AbstractClient
{
    public function createInvoice(
        string $storeId,
        PreciseNumber $amount,
        string $currency,
        ?string $orderId = null,
        ?string $buyerEmail = null,
        ?array $metaData = null,
        ?InvoiceCheckoutOptions $checkoutOptions = null
    ): \BTCPayServer\Result\Invoice {
        $url = $this->getBaseUrl() . 'stores/' . urlencode(
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
            'amount'   => $amount->__toString(),
            'currency' => $currency,
            'metadata' => !empty($metaDataMerged) ? $metaDataMerged : null,
            'checkout' => $checkoutOptions ? Formatter::objectToArrayNoEmpty($checkoutOptions) : null
          ],
            JSON_THROW_ON_ERROR
        );

        $response = CurlClient::request($method, $url, $headers, $body);

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
        $url = $this->getBaseUrl() . 'stores/' . urlencode($storeId) . '/invoices/' . urlencode($invoiceId);
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\Invoice(json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR));
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * @return PaymentMethod[]
     */
    public function getPaymentMethods(string $storeId, string $invoiceId): array
    {
        $method = 'GET';
        $url = $this->getBaseUrl() . 'stores/' . urlencode($storeId) . '/invoices/' . urlencode($invoiceId) . '/payment-methods';
        $headers = $this->getRequestHeaders();
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode(
                $response->getBody(),
                true,
                512,
                JSON_THROW_ON_ERROR
            );
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
