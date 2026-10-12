<?php

declare(strict_types=1);

namespace BTCPayServer\Tests;

use BTCPayServer\Client\Webhook;
use BTCPayServer\Http\ClientInterface;
use BTCPayServer\Http\Response;
use PHPUnit\Framework\TestCase;

final class WebhookTest extends TestCase
{
    public function testUpdateWebhookRejectsEmptySecretBeforeSendingRequest(): void
    {
        $httpClient = $this->createMock(ClientInterface::class);
        $httpClient->expects($this->never())->method('request');
        $webhookClient = new Webhook('https://example.com', 'api-key', $httpClient);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $secret');

        $webhookClient->updateWebhook('store-id', 'https://merchant.example/webhook', 'webhook-id', null, true, true, '');
    }

    /**
     * @dataProvider validUpdateSecrets
     */
    public function testUpdateWebhookPreservesValidSecretPayload(?string $secret): void
    {
        $httpClient = $this->createMock(ClientInterface::class);
        $httpClient->expects($this->once())->method('request')->with(
            'PUT',
            'https://example.com/api/v1/stores/store-id/webhooks/webhook-id',
            $this->anything(),
            $this->callback(function (string $body) use ($secret): bool {
                $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
                return array_key_exists('secret', $data) && $data['secret'] === $secret;
            })
        )->willReturn(new Response(200, '{"id":"webhook-id"}', []));
        $webhookClient = new Webhook('https://example.com', 'api-key', $httpClient);

        $result = $webhookClient->updateWebhook('store-id', 'https://merchant.example/webhook', 'webhook-id', null, true, true, $secret);

        $this->assertSame('webhook-id', $result->getId());
    }

    public function validUpdateSecrets(): array
    {
        return [
            'keep existing secret' => [null],
            'non-empty secret' => ['abc'],
            'non-empty zero string' => ['0'],
        ];
    }

    public function testRejectsSignatureWithEmptySecret(): void
    {
        $requestBody = '{"type":"InvoiceSettled"}';
        $btcpaySigHeader = 'sha256=' . hash_hmac('sha256', $requestBody, '');

        $this->assertFalse(Webhook::isIncomingWebhookRequestValid($requestBody, $btcpaySigHeader, ''));
    }

    public function testAcceptsNonEmptyZeroSecret(): void
    {
        $requestBody = '{"type":"InvoiceSettled"}';
        $secret = '0';
        $btcpaySigHeader = 'sha256=' . hash_hmac('sha256', $requestBody, $secret);

        $this->assertTrue(Webhook::isIncomingWebhookRequestValid($requestBody, $btcpaySigHeader, $secret));
    }

    public function testRejectsEmptyBodyOrHeader(): void
    {
        $secret = 'abc';
        $btcpaySigHeader = 'sha256=' . hash_hmac('sha256', '', $secret);

        $this->assertFalse(Webhook::isIncomingWebhookRequestValid('', $btcpaySigHeader, $secret));
        $this->assertFalse(Webhook::isIncomingWebhookRequestValid('{"type":"InvoiceSettled"}', '', $secret));
    }

    public function testRejectsIncorrectSecretOrTamperedBody(): void
    {
        $requestBody = '{"type":"InvoiceSettled"}';
        $secret = 'abc';
        $btcpaySigHeader = 'sha256=' . hash_hmac('sha256', $requestBody, $secret);

        $this->assertFalse(Webhook::isIncomingWebhookRequestValid($requestBody, $btcpaySigHeader, 'wrong-secret'));
        $this->assertFalse(Webhook::isIncomingWebhookRequestValid('{"type":"InvoiceProcessing"}', $btcpaySigHeader, $secret));
    }

    /**
     * In version 1.3, we made the method Webhook::isIncomingWebhookRequestValid() static.
     * This test proves that making this method static is not a breaking change.
     * If your legacy code calls the method as a class method, you still get the same result even though it has been made static now.
     */
    public function testValidateWebhookStaticCall(): void
    {
        $requestBody = '{"a":1,"b":2,"c":3}';
        $btcpaySigHeader = 'sha256=bc8122472fb9bb9c15d90d7a61b156f54a69d835592c85d0f37f6454d530dec8';
        $secret = 'abc';

        $baseUrl = 'https://www.btcpayserver.org';
        $apiKey = 'XXX';

        $webhookClient = new Webhook($baseUrl, $apiKey);

        try {
            $a = $webhookClient->isIncomingWebhookRequestValid($requestBody, $btcpaySigHeader, $secret);
        } catch (\Throwable $t) {
            $a = 'ERROR: ' . $t->getMessage();
        }
        $this->assertTrue($a, 'When "\BTCPayServer\Client\Webhook::isIncomingWebhookRequestValid()" is called as a class member method it should return true.');

        try {
            $b = Webhook::isIncomingWebhookRequestValid($requestBody, $btcpaySigHeader, $secret);
        } catch (\Throwable $t) {
            $b = 'ERROR: ' . $t->getMessage();
        }
        $this->assertTrue($b, 'When "\BTCPayServer\Client\Webhook::isIncomingWebhookRequestValid()" is called statically it should return true.');
    }
}
