<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Result\Health as ResultHealth;

class Health extends AbstractClient
{
    public function getHealthStatus(): ResultHealth
    {
        $url = $this->getApiUrl() . 'health';
        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new ResultHealth(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
