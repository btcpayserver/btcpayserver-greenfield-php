<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    protected string $host;
    protected string $apiKey;
    protected string $nodeUri;
    protected string $storeId;

    public static function setUpBeforeClass(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->safeLoad();

        echo '$_ENV: ';
        echo $_ENV['BTCPAY_API_KEY'];
        echo "\n";
        echo 'getenv(): ';
        echo getenv('BTCPAY_API_KEY');

        $apiKey = getenv('BTCPAY_API_KEY');
        $host = getenv('BTCPAY_HOST');
        $storeId = getenv('BTCPAY_STORE_ID');
        $nodeUri = getenv('BTCPAY_NODE_URI');

        if (!$apiKey || !$host || !$storeId || !$nodeUri) {
            throw new \Exception('Missing .env variables');
        }
    }

    protected function setUp(): void
    {
        $this->host = getenv('BTCPAY_HOST');
        $this->apiKey = getenv('BTCPAY_API_KEY');
        $this->nodeUri = getenv('BTCPAY_NODE_URI');
        $this->storeId = getenv('BTCPAY_STORE_ID');
    }

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
