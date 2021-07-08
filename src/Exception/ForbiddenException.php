<?php

declare(strict_types=1);

namespace BTCPayServer\Exception;

class ForbiddenException extends BTCPayException
{
    public const STATUS = 400;

}