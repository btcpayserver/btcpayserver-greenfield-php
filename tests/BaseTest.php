<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use PHPUnit\Framework\TestCase;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class BaseTest extends TestCase
{
    protected string $host;
    protected string $apiKey;
    protected string $nodeUri;
    protected string $storeId;

    public function setUp(): void
    {
        $this->apiKey = $_ENV['BTCPAY_API_KEY'];
        $this->host = $_ENV['BTCPAY_HOST'];
        $this->storeId = $_ENV['BTCPAY_STORE_ID'];
        $this->nodeUri = $_ENV['BTCPAY_NODE_URI'];
    }
}
