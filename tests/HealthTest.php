<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Health;
use BTCPayServer\Result\Health as ResultHealth;

final class HealthTest extends BaseTest
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @group getHealthStatus */
    public function testItCanGetHealthStatus(): void
    {
        $healthClient = new Health($this->host, $this->apiKey);
        $health = $healthClient->getHealthStatus();

        $this->assertInstanceOf(ResultHealth::class, $health);

        $this->assertIsBool($health->isSyncronized());
    }
}
