<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Exception\BadRequestException;
use BTCPayServer\Exception\BTCPayException;
use BTCPayServer\Exception\ForbiddenException;
use BTCPayServer\Http\Response;

class AbstractClient
{

    private string $apiKey;
    private string $baseUrl;

    public function __construct(string $baseUrl, string $apiKey)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->apiKey = $apiKey;
    }

    protected function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    protected function getApiKey(): string
    {
        return $this->apiKey;
    }

    protected function getRequestHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'token ' . $this->getApiKey()
        ];
    }

    protected function getExceptionByStatusCode(
        string $method,
        string $url,
        Response $response
    ): BTCPayException {
        $exceptions = [
            ForbiddenException::STATUS => ForbiddenException::class,
            BadRequestException::STATUS => BadRequestException::class,
        ];

        $class = $exceptions[$response->getStatus()] ?? BTCPayException::class;
        $e = new $class($method, $url, $response);
        return $e;
    }

}