<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\CurlClient;

class Store extends AbstractClient
{
  public function getStore($storeId)
  {
    $url = $this->getBaseUrl() . 'stores/' . urlencode($storeId);
    $headers = $this->getRequestHeaders();
    $method = 'GET';
    $response = CurlClient::request($method, $url, $headers);

    if ($response->getStatus() === 200) {
      return new \BTCPayServer\Result\Store(json_decode($response->getBody(), true));
    } else {
      throw $this->getExceptionByStatusCode($method, $url, $response);
    }
  }
}
