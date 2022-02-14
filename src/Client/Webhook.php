<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

class Webhook extends AbstractClient
{
    /**
     * @param string $storeId
     * @return \BTCPayServer\Result\WebhookList
     */
    public function getStoreWebhooks(string $storeId): \BTCPayServer\Result\WebhookList
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return new \BTCPayServer\Result\WebhookList(
                json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getWebhook(string $storeId, string $webhookId): \BTCPayServer\Result\Webhook
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks/' . urlencode($webhookId);
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\Webhook($data);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getLatestDeliveries(string $storeId, string $webhookId, string $count): \BTCPayServer\Result\WebhookDeliveryList
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks/' . urlencode($webhookId) . '/deliveries?count=' . $count;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\WebhookDeliveryList($data);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function getDelivery(string $storeId, string $webhookId, string $deliveryId): \BTCPayServer\Result\WebhookDelivery
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks/' . urlencode($webhookId) . '/deliveries/' . urlencode($deliveryId);
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\WebhookDelivery($data);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Get the delivery's request.
     *
     * The delivery's JSON request sent to the endpoint.
     *
     * @param string $storeId
     * @param string $webhookId
     * @param string $deliveryId
     * @return string JSON request
     */
    public function getDeliveryRequest(string $storeId, string $webhookId, string $deliveryId): string
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks/' . urlencode($webhookId) . '/deliveries/' . urlencode($deliveryId);
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return $response->getBody();
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * Redeliver the delivery.
     *
     * @param string $storeId
     * @param string $webhookId
     * @param string $deliveryId
     * @return string The new delivery id being broadcasted. (Broadcast happen asynchronously with this call)
     */
    public function redeliverDelivery(string $storeId, string $webhookId, string $deliveryId): string
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks/' .
                        urlencode($webhookId) . '/deliveries/' . urlencode($deliveryId) . '/redeliver';
        $headers = $this->getRequestHeaders();
        $method = 'POST';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    public function createWebhook(string $storeId, string $url, ?array $specificEvents, ?string $secret): \BTCPayServer\Result\WebhookCreated
    {
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

        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks';
        $headers = $this->getRequestHeaders();
        $method = 'POST';
        $response = $this->getHttpClient()->request($method, $url, $headers, json_encode($data, JSON_THROW_ON_ERROR));

        if ($response->getStatus() === 200) {
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            return new \BTCPayServer\Result\WebhookCreated($data);
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
    public static function isIncomingWebhookRequestValid(string $requestBody, string $btcpaySigHeader, string $secret): bool
    {
        if ($requestBody && $btcpaySigHeader) {
            $expectedHeader = 'sha256=' . hash_hmac('sha256', $requestBody, $secret);

            if ($expectedHeader === $btcpaySigHeader) {
                return true;
            }
        }
        return false;
    }

    public function deleteWebhook(string $storeId, string $webhookId): void
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks/' . urlencode($webhookId);
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() !== 200) {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }

    /**
     * @deprecated 2.0.0 Please use `getStoreWebhooks()` instead.
     * @see getStoreWebhooks()
     *
     * @param string $storeId
     * @return \BTCPayServer\Result\Webhook[]
     */
    public function getWebhooks(string $storeId): array
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode($storeId) . '/webhooks';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

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
}
