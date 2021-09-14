<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

use BTCPayServer\Http\CurlClient;

class Webhook extends AbstractClient
{
    /**
     * @param string $storeId
     * @return \BTCPayServer\Result\Webhook[]
     */
    public function getWebhooks(string $storeId): array
    {
        // TODO test & finish
        $url = $this->getBaseUrl() . 'stores/' . urlencode($storeId) . '/webhooks';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $r = [];
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            foreach ($data as $item) {
                $item = new \BTCPayServer\Result\Webhook($item);
                $r[] = $item;
            }
            return $r;
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function createWebhook(string $storeId, string $url, ?array $specificEvents, ?string $secret): \BTCPayServer\Result\Webhook
    {
        // TODO test & finish
        $data = [
            'enabled' => true,
            'automaticRedelivery' => true,
            'url' => $url
        ];

        if ($specificEvents === null) {
            $data['authorizedEvents'] = [
                'everything' => true
            ];
        } elseif (count($specificEvents) === 0) {
            throw new \InvalidArgumentException('Argument $specificEvents should be NULL or contains at least 1 item.');
        } else {
            $data['authorizedEvents'] = [
                'everything' => false,
                'specificEvents' => $specificEvents
            ];
        }

        if ($secret === '') {
            throw new \InvalidArgumentException('Argument $secret should be NULL (let BTCPay Server auto-generate a secret) or you should provide a long and safe secret string.');
        } elseif ($secret !== null) {
            $data['secret'] = $secret;
        }

        $url = $this->getBaseUrl() . 'stores/' . urlencode($storeId) . '/webhooks';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = CurlClient::request($method, $url, $headers, json_encode($data, JSON_THROW_ON_ERROR));

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\Webhook($data);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Check if the request your received from a webhook is authentic and can be trusted.
     * @param string $requestBody Most likely you will use `$requestBody = file_get_contents('php://input');`
     * @param string $btcpaySigHeader Most likely you will use `$_SERVER['HTTP_BTCPay-Sig']` for this.
     * @param string $secret The secret that's registered with the webhook in BTCPay Server as a security precaution.
     * @return bool
     */
    public function isIncomingWebhookRequestValid(string $requestBody, string $btcpaySigHeader, string $secret): bool
    {
        if ($requestBody && $btcpaySigHeader) {
            $expectedHeader = 'sha256=' . hash_hmac('sha256', $requestBody, $secret);

            if ($expectedHeader === $btcpaySigHeader) {
                return true;
            }
        }
        return false;
    }

    public function deleteWebhook(string $storeId, string $webhookId){

        $url = $this->getBaseUrl() . 'stores/' . urlencode($storeId) . '/webhooks/' . urlencode($webhookId);
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';
        $response = CurlClient::request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return true;

        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
