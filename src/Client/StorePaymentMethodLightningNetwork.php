<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\CurlClient;

/**
 * Handles a stores LightningNetwork payment methods.
 *
 * @see https://docs.btcpayserver.org/API/Greenfield/v1/#tag/Store-Payment-Methods-(Lightning-Network)
 */
class StorePaymentMethodLightningNetwork extends AbstractClient
{
    public function getPaymentMethods(string $storeId): array
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/LightningNetwork';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            foreach ($data as $item) {
                $r[] = new \BTCPayServer\Result\StorePaymentMethodLightningNetwork($item, $item['cryptoCode'] . '-LightningNetwork');
            }
            return $r;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getPaymentMethod(string $storeId, string $cryptoCode): \BTCPayServer\Result\StorePaymentMethodLightningNetwork
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/LightningNetwork/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\StorePaymentMethodLightningNetwork($data, $data['cryptoCode'] . '-LightningNetwork');
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * @param string $storeId
     * @param string $cryptoCode
     * @param array  $settings
     *      Array of data to update. e.g.
     *      [
     *      'enabled' => true,
     *      'connectionString' => 'Internal Node'
     *      ]
     *
     * @return \BTCPayServer\Result\StorePaymentMethodLightningNetwork
     * @throws \JsonException
     */
    public function updatePaymentMethod(string $storeId, string $cryptoCode, array $settings): \BTCPayServer\Result\StorePaymentMethodLightningNetwork
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/LightningNetwork/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'PUT';
        $response = CurlClient::request($method, $url, $headers, json_encode($settings));

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\StorePaymentMethodLightningNetwork($data, $data['cryptoCode'] . '-LightningNetwork');
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function removePaymentMethod(string $storeId, string $cryptoCode): bool
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/LightningNetwork/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return true;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
