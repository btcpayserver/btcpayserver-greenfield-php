<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

/**
 * Handles stores on chain payment methods.
 *
 * @see https://docs.btcpayserver.org/API/Greenfield/v1/#tag/Store-Payment-Methods-(On-Chain)
 */
class StorePaymentMethodOnChain extends AbstractStorePaymentMethodClient
{
    /**
     * @param string $storeId
     *
     * @return \BTCPayServer\Result\StorePaymentMethodOnChain[]
     * @throws \JsonException
     */
    public function getPaymentMethods(string $storeId): array
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_ONCHAIN;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            foreach ($data as $item) {
                $r[] = new \BTCPayServer\Result\StorePaymentMethodOnChain($item, $item['cryptoCode']);
            }
            return $r;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getPaymentMethod(string $storeId, string $cryptoCode): \BTCPayServer\Result\StorePaymentMethodOnChain
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_ONCHAIN . '/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\StorePaymentMethodOnChain($data, $data['cryptoCode']);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Update OnChain payment methods.
     *
     * @param string $storeId
     * @param string $cryptoCode
     *
     * @param array $settings Array of data to update. e.g
     *                        [
     *                          'enabled' => true,
     *                          'derivationScheme' => 'xpub...',
     *                          'label' => 'string',
     *                          'accountKeyPath' => "abcd82a1/84'/0'/0'"
     *                        ]
     *
     * @return \BTCPayServer\Result\StorePaymentMethodOnChain
     * @throws \JsonException
     *
     */
    public function updatePaymentMethod(string $storeId, string $cryptoCode, array $settings): \BTCPayServer\Result\StorePaymentMethodOnChain
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_ONCHAIN . '/' . $cryptoCode;
        $headers = $this->getRequestHeaders();
        $method = 'PUT';
        $response = $this->getHttpClient()->request($method, $url, $headers, json_encode($settings));

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\StorePaymentMethodOnChain($data, $data['cryptoCode']);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Gets a list of OnChain addresses for the current configured xpub/wallet.
     *
     * @param string $storeId
     * @param string $cryptoCode
     *
     * @return \BTCPayServer\Result\Address[]
     * @throws \JsonException
     */
    public function previewPaymentMethodAddresses(string $storeId, string $cryptoCode): array
    {
        // todo: add offset + amount query parameters

        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_ONCHAIN . '/' . $cryptoCode . '/preview';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $addressList = new \BTCPayServer\Result\AddressList(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
            return $addressList->getAddresses();
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Returns OnChain addresses for any given xpub ($derivationScheme) and
     * account key path.
     *
     * On how to format the account key path please check the Greenfield API
     * docs.
     *
     * @param string      $storeId
     * @param string      $cryptoCode
     * @param string      $derivationScheme
     * @param string|null $accountKeyPath
     *
     * @return \BTCPayServer\Result\Address[]
     * @throws \JsonException
     */
    public function previewProposedPaymentMethodAddresses(
        string $storeId,
        string $cryptoCode,
        string $derivationScheme,
        string $accountKeyPath = null
    ): array {
        // todo: add offset + amount query parameters + check structure of derivationScheme etc.

        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_ONCHAIN . '/' . $cryptoCode . '/preview';
        $headers = $this->getRequestHeaders();
        $method = 'POST';
        $body = json_encode([
              'derivationScheme' => $derivationScheme,
              'accountKeyPath' => $accountKeyPath,
        ]);
        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            $addressList = new \BTCPayServer\Result\AddressList(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
            return $addressList->getAddresses();
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Disables the OnChain payment method. It also removes your configured
     * xpub key.
     *
     * @param string $storeId
     * @param string $cryptoCode e.g. BTC
     *
     * @return bool
     */
    public function removePaymentMethod(string $storeId, string $cryptoCode): bool
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/payment-methods/' . self::PAYMENT_TYPE_ONCHAIN . '/' . $cryptoCode;
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
