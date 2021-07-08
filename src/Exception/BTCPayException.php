<?php
declare(strict_types=1);

namespace BTCPayServer\Exception;

use BTCPayServer\Http\Response;

class BTCPayException extends \RuntimeException
{
    public function __construct(string $method, string $url, Response $response)
    {
        $message = 'Error during '.$method.' to '.$url.'. Got response ('.$response->getStatus().'): '.$response->getBody();
        parent::__construct($message, $response->getStatus());
    }

}