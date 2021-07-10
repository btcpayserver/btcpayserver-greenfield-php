<?php

declare(strict_types=1);

namespace BTCPayServer\Http;

/**
 * HTTP Client using cURL to communicate.
 */
class CurlClient implements ClientInterface
{
    /**
     * @inheritdoc
     */
    public static function request(
        string $method,
        string $url,
        array $headers = [],
        string $body = ''
    ): ResponseInterface {
        $flatHeaders = [];
        foreach ($headers as $key => $value) {
            $flatHeaders[] = $key . ': ' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        if ($body !== '') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $flatHeaders);

        $responseString = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $responseHeaders = [];
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headerPart = substr($responseString, 0, $headerSize);
        $headerPart = explode("\n", $headerPart);
        foreach ($headerPart as $headerLine) {
            $headerLine = trim($headerLine);
            if ($headerLine) {
                $parts = explode(':', $headerLine);
                if (count($parts) === 2) {
                    $key = $parts[0];
                    $value = $parts[1];
                    $responseHeaders[$key] = $value;
                }
            }
        }
        $responseBody = substr($responseString, $headerSize);

        return new Response($status, $responseBody, $responseHeaders);
    }
}
