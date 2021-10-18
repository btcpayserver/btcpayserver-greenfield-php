<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

class Store extends AbstractClient
{
    public function getStore($storeId): \BTCPayServer\Result\Store
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId);
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\Store(json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR));
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * @return \BTCPayServer\Result\Store[]
     */
    public function getStores(): array
    {
        $url = $this->getApiUrl() . 'stores';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode($response->getBody(), true);
            foreach ($data as $item) {
                $item = new \BTCPayServer\Result\Store($item);
                $r[] = $item;
            }
            return $r;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
