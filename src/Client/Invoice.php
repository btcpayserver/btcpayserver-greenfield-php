<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\CurlClient;
use BTCPayServer\Result\PaymentMethod;
use BTCPayServer\Util\Formatter;
use BTCPayServer\Util\PreciseNumber;

class Invoice extends AbstractClient
{

    /**
     * @param string                                           $storeId
     * @param \BTCPayServer\Util\PreciseNumber                 $amount
     * @param string                                           $currency
     * @param string|null                                      $orderId
     * @param string|null                                      $customerEmail
     * @param array|null                                       $metaData
     * @param \BTCPayServer\Client\InvoiceCheckoutOptions|null $checkoutOptions
     *
     * @return \BTCPayServer\Result\Invoice
     * @throws \JsonException
     */
    public function createInvoice(
      string $storeId,
      PreciseNumber $amount,
      string $currency,
      ?string $orderId = '',
      ?string $customerEmail = '',
      ?array $metaData = [],
      ?InvoiceCheckoutOptions $checkoutOptions = null
    ): \BTCPayServer\Result\Invoice {
        // TODO test & finish this
        // TODO add parameter for metadata and merge with orderId and buyerEmail
        $url = $this->getBaseUrl() . 'stores/' . urlencode(
            $storeId
          ) . '/invoices';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        // Prepare metadata.
        // Todo: decide if explicit param or metadata array takes precedence for
        // email and order id doing array_merge or similar. Current rule explicit
        // params take precedence.
        $metaDataMerged = [];

        // Set metaData if any.
        if ($metaData) {
            $metaDataMerged = $metaData;
        }

        // We need to check $orderId and $customerEmail explicitly as they are optional.
        // Overwrites existing data passed by $metaData.
        if ($orderId) {
            $metaDataMerged['orderId'] = $orderId;
        }
        if ($customerEmail) {
            $metaDataMerged['buyerEmail'] = $customerEmail;
        }

        $body = json_encode(
          [
            'amount'   => $amount->__toString(),
            'currency' => $currency,
            'metadata' => !empty($metaDataMerged) ? $metaDataMerged : new \stdClass(),
            'checkout' => $checkoutOptions ? Formatter::objectToArrayNoEmpty($checkoutOptions) : new \stdClass()
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
     * @param string $storeId
     * @param string $invoiceId
     *
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
