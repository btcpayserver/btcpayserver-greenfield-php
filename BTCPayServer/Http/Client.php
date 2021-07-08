<?php

declare(strict_types=1);

namespace BTCPayServer\Http;

class Client
{

    public static function request(
        string $method,
        string $url,
        string $body = '',
        array $headers = []
    ): \BTCPayServer\Http\Response
    {

        $flatHeaders = [];
        foreach ($headers as $key => $value) {
            $flatHeaders[] = $key . ': ' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
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

class Response
{

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $headers;

    public function __construct(int $status, string $body, array $headers)
    {
        $this->body = $body;
        $this->status = $status;
        $this->headers = $headers;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
}