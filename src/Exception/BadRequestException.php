<?php

declare(strict_types=1);

namespace BTCPayServer\Exception;

class BadRequestException extends BTCPayException
{
    public const STATUS = 400;
}
