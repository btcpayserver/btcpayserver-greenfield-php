<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

class Payout extends AbstractClient
{
    public function createPullPayment(
        string $storeId,
        string $paymentName,
        string $paymentAmount,
        string $paymentCurrency,
        mixed $paymentPeriod,
        mixed $boltExpiration,
        mixed $startsAt,
        mixed $expiresAt,
        array $paymentMethods
    )
    {
        $url = $this->getApiUrl() . 'stores/' . urlencode(
            $storeId
        ) . '/pull-payments';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            [
                    'name' => $paymentName,
                    'amount' => $paymentAmount,
                    'currency' => $paymentCurrency,
                    'period' => $paymentPeriod,
                    'BOLT11Expiration' => $boltExpiration,
                    'startsAt' => $startsAt,
                    'expiresAt' => $expiresAt,
                    'paymentMethods' => $paymentMethods
                ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        } else {
            throw $this->getExceptionByStatusCode($method, $url, $response);
        }
    }
}
