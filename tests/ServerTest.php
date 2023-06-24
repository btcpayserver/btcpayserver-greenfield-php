<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Server;
use BTCPayServer\Result\ServerInfo;
use BTCPayServer\Result\ServerSyncStatus;
use BTCPayServer\Result\ServerSyncStatusNodeInformation;

final class ServerTest extends BaseTest
{
    public Server $serverClient;

    public function setUp(): void
    {
        parent::setUp();

        $this->serverClient = new Server($this->host, $this->apiKey);
    }

    /** @group getServerInfo */
    public function testItGetsServerInfoAndAllGetters(): void
    {
        $serverInfo = $this->serverClient->getInfo();

        $this->assertInstanceOf(ServerInfo::class, $serverInfo);
        $this->assertIsString($serverInfo->getVersion());
        $this->assertIsString($serverInfo->getOnionUrl());
        $this->assertIsBool($serverInfo->isFullySynced());
        $this->assertIsArray($serverInfo->getSupportedPaymentMethods());

        $this->assertInstanceOf(ServerSyncStatus::class, $serverInfo->getSyncStatus());
        $this->assertIsInt($serverInfo->getSyncStatus()->getChainHeight());
        $this->assertIsInt($serverInfo->getSyncStatus()->getSyncHeight());
        $this->assertIsString($serverInfo->getSyncStatus()->getCryptoCode());
        $this->assertIsBool($serverInfo->getSyncStatus()->isAvailable());

        $this->assertInstanceOf(ServerSyncStatusNodeInformation::class, $serverInfo->getSyncStatus()->getNodeInformation());
        $this->assertIsInt($serverInfo->getSyncStatus()->getNodeInformation()->getHeaders());
        $this->assertIsInt($serverInfo->getSyncStatus()->getNodeInformation()->getBlocks());
        $this->assertIsFloat($serverInfo->getSyncStatus()->getNodeInformation()->getVerificationProgress());
    }
}
