<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Server;
use BTCPayServer\Result\ServerInfo;
use BTCPayServer\Result\ServerSyncStatusList;
use BTCPayServer\Result\ServerSyncStatusNodeInformation;
use BTCPayServer\Util\PreciseNumber;

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

        $this->assertInstanceOf(ServerSyncStatusList::class, $serverInfo->getSyncStatus());

        foreach ($serverInfo->getSyncStatus()->all() as $serverSyncStatus) {
            $this->assertIsInt($serverSyncStatus->getChainHeight());
            $this->assertIsInt($serverSyncStatus->getSyncHeight());
            $this->assertIsString($serverSyncStatus->getCryptoCode());
            $this->assertIsBool($serverSyncStatus->isAvailable());

            $this->assertInstanceOf(ServerSyncStatusNodeInformation::class, $serverSyncStatus->getNodeInformation());
            $this->assertIsInt($serverSyncStatus->getNodeInformation()->getHeaders());
            $this->assertIsInt($serverSyncStatus->getNodeInformation()->getBlocks());
            $this->assertInstanceOf(PreciseNumber::class, $serverSyncStatus->getNodeInformation()->getVerificationProgress());
        }
    }
}
