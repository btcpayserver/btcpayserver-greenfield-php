<?php

declare(strict_types=1);

namespace BTCPayServer\Http;

class Response
{

  /**
   * @var int
   */
  private $status;

  /**
   * @var string
   */
  private $body;

  /**
   * @var array
   */
  private $headers;

  public function __construct(int $status, string $body, array $headers)
  {
    $this->body = $body;
    $this->status = $status;
    $this->headers = $headers;
  }

  /**
   * @return int
   */
  public function getStatus(): int
  {
    return $this->status;
  }

  /**
   * @return string
   */
  public function getBody(): string
  {
    return $this->body;
  }

  /**
   * @return array
   */
  public function getHeaders(): array
  {
    return $this->headers;
  }
}
