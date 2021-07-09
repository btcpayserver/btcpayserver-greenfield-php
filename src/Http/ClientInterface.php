<?php

declare(strict_types=1);

namespace BTCPayServer\Http;

interface ClientInterface
{
  /**
   * Sends the HTTP request to API server.
   *
   * @param string $method
   * @param string $url
   * @param array  $headers
   * @param string $body
   *
   * @return \BTCPayServer\Http\ResponseInterface
   */
    public static function request(string $method, string $url, array $headers = [], string $body = ''): ResponseInterface;
}
