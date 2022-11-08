<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Notification;
use BTCPayServer\Result\NotificationList;

final class NotificationTest extends BaseTest
{
    public function setUp(): void
    {
        parent::setUp();

        $this->notificationClient = new Notification($this->host, $this->apiKey);
    }

    /** @group getNotifications */
    public function testItCanGetNotifications(): void
    {
        $notifications = $this->notificationClient->getNotifications();

        $this->assertInstanceOf(NotificationList::class, $notifications);
        foreach ($notifications->all() as $notification) {
            $this->assertIsString($notification->getId());
            $this->assertIsString($notification->getBody());
            $this->assertIsString($notification->getLink());
            $this->assertIsInt($notification->getCreatedTime());
            $this->assertIsBool($notification->isSeen());
        }
    }

    /** @group getNotification */
    public function testItCanGetNotification(): void
    {
        $notifications = $this->notificationClient->getNotifications();
        $notification = $this->notificationClient->getNotification($notifications->all()[0]->getId());

        $this->assertIsString($notification->getId());
        $this->assertIsString($notification->getBody());
        $this->assertIsString($notification->getLink());
        $this->assertIsInt($notification->getCreatedTime());
        $this->assertIsBool($notification->isSeen());
    }

    /** @group updateNotification */
    public function testItCanUpdateNotification(): void
    {
        $notifications = $this->notificationClient->getNotifications();
        $notification = $this->notificationClient->updateNotification($notifications->all()[0]->getId(), true);

        $this->assertIsString($notification->getId());
        $this->assertIsString($notification->getBody());
        $this->assertIsString($notification->getLink());
        $this->assertIsInt($notification->getCreatedTime());
        $this->assertTrue($notification->isSeen());
    }

    /** @group removeNotification */
    public function testItCanRemoveNotification(): void
    {
        $notifications = $this->notificationClient->getNotifications();
        $notification = $this->notificationClient->removeNotification($notifications->all()[0]->getId());

        $this->assertTrue($notification);
    }
}
