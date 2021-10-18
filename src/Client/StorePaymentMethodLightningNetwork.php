<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

/**
 * Handles a stores LightningNetwork payment methods.
 *
 * @see https://docs.btcpayserver.org/API/Greenfield/v1/#tag/Store-Payment-Methods-(Lightning-Network)
 */
class StorePaymentMethodLightningNetwork extends AbstractStorePaymentMethodClient
{
    /**
     * @param string $storeId
     *
     * @return  \BTCPayServer\Result\StorePaymentMethodLightningNetwork[]
     * @throws \JsonException
     */
    public function getPaymentMethods(string $storeId): array
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_LIGHTNING;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            foreach ($data as $item) {
                $r[] = new \BTCPayServer\Result\StorePaymentMethodLightningNetwork($item, $item['cryptoCode'] . '-' . self::PAYMENT_TYPE_LIGHTNING);
            }
            return $r;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getPaymentMethod(string $storeId, string $cryptoCode): \BTCPayServer\Result\StorePaymentMethodLightningNetwork
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_LIGHTNING . '/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\StorePaymentMethodLightningNetwork($data, $data['cryptoCode'] . '-' . self::PAYMENT_TYPE_LIGHTNING);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Update LightningNetwork payment methods. Allows you to enable/disable
     * them, and you can set the store LN node to be internal or some external
     * node, see the Greenfield API docs for details.
     *
     * @param string $storeId
     * @param string $cryptoCode
     * @param array $settings Array of data to update. e.g
     *                        [
     *                          'enabled' => true,
     *                          'connectionString' => 'Internal Node'
     *                        ]
     *
     * @return \BTCPayServer\Result\StorePaymentMethodLightningNetwork
     * @throws \JsonException
     */
    public function updatePaymentMethod(string $storeId, string $cryptoCode, array $settings): \BTCPayServer\Result\StorePaymentMethodLightningNetwork
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_LIGHTNING . '/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'PUT';
        $response = $this->getHttpClient()->request($method, $url, $headers, json_encode($settings));

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\StorePaymentMethodLightningNetwork($data, $data['cryptoCode'] . '-' . self::PAYMENT_TYPE_LIGHTNING);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Disables and removes the LightningNetwork payment method.
     *
     * @param string $storeId
     * @param string $cryptoCode
     *
     * @return bool
     */
    public function removePaymentMethod(string $storeId, string $cryptoCode): bool
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_LIGHTNING . '/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return true;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
