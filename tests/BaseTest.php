<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use PHPUnit\Framework\TestCase;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class BaseTest extends TestCase
{
    public string $host;
    public string $apiKey;
    public string $nodeUri;
    public string $storeId;
    public $dotenv;

    public function setUp(): void
    {
        $this->apiKey = $_ENV['BTCPAY_API_KEY'];
        $this->host = $_ENV['BTCPAY_HOST'];
        $this->storeId = $_ENV['BTCPAY_STORE_ID'];
        $this->nodeUri = $_ENV['BTCPAY_NODE_URI'];
    }
}
