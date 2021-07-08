<?php

declare(strict_types=1);

namespace BTCPayServer\Http;

interface ResponseInterface {

  /**
   * HTTP status code.
   */
  public function getStatus(): int;

  /**
   * JSON encoded string.
   */
  public function getBody(): string;

  /**
   * HTTP headers of the response.
   */
  public function getHeaders(): array;
}
