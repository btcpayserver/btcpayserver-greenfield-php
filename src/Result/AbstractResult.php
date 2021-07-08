<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

abstract class AbstractResult
{

    /** @var array */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

}
