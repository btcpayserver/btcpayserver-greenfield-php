<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

class Miscellaneous extends AbstractClient
{
    public function getPermissionMetadata(): \BTCPayServer\Result\PermissionMetadata
    {
        $url = $this->getBaseUrl() . '/misc/permissions';
        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\PermissionMetadata(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getLanguageCodes(): \BTCPayServer\Result\LanguageCodeList
    {
        $url = $this->getBaseUrl() . '/misc/lang';
        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\LanguageCodeList(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getInvoiceCheckout(
        string $invoiceId,
        ?string $lang
    ): \BTCPayServer\Result\InvoiceCheckoutHTML {
        $url = $this->getBaseUrl() . '/i/' . urlencode($invoiceId);

        //set language query parameter if passed
        if (isset($lang)) {
            $url .= '?lang=' . $lang;
        }

        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\InvoiceCheckoutHTML(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
