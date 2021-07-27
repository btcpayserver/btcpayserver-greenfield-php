<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\CurlClient;

class ApiKey extends AbstractClient
{
    /**
     * Create a URL you can send the user to. He/she will be prompted to create an API key that corresponds with your needs.
     */
    public static function getAuthorizeUrl(string $baseUrl, array $permissions, ?string $applicationName, ?bool $strict, ?bool $selectiveStores, ?string $redirectToUrlAfterCreation, ?string $applicationIdentifier): string
    {
        $url = rtrim($baseUrl, '/') . '/api-keys/current';

        $params = [];
        $params['permissions'] = $permissions;
        $params['applicationName'] = $applicationName;
        $params['strict'] = $strict;
        $params['selectiveStores'] = $selectiveStores;
        $params['redirect'] = $redirectToUrlAfterCreation;
        $params['applicationIdentifier'] = $applicationIdentifier;

        // Take out NULL values
        $params = array_filter($params, function ($value) {
            return $value !== null;
        });

        $url .= '?' . http_build_query($params);

        return $url;
    }

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
