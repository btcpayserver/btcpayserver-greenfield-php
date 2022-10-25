<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Result\LightningInvoice;
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

    // test that all the variables are set
    public function testThatAllTheVariablesAreSet(): void
    {
        $this->assertIsString($this->apiKey);
        $this->assertIsString($this->host);
        $this->assertIsString($this->storeId);
        $this->assertIsString($this->nodeUri);

        $this->assertNotEmpty($this->apiKey);
        $this->assertNotEmpty($this->host);
        $this->assertNotEmpty($this->storeId);
        $this->assertNotEmpty($this->nodeUri);
   }

}

   // if any of the .env variables are missing, throw an exception
   if (!isset($_ENV['BTCPAY_API_KEY']) || !isset($_ENV['BTCPAY_HOST']) || !isset($_ENV['BTCPAY_STORE_ID']) || !isset($_ENV['BTCPAY_NODE_URI'])) {
    throw new \Exception('Missing .env variables');
   }
