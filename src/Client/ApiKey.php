<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\CurlClient;
use BTCPayServer\Result\PaymentMethod;
use BTCPayServer\Util\PreciseNumber;

class ApiKey extends AbstractClient
{

    public function getCurrent(string $storeId, string $invoiceId): \BTCPayServer\Result\ApiKey
    {
        // TODO test & finish
        $url = $this->getBaseUrl() . 'api-keys/current';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\ApiKey(json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR));
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

}
