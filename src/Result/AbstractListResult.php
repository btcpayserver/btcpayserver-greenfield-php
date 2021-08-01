<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

abstract class AbstractListResult extends AbstractResult implements \Countable
{
    public function count()
    {
        return count($this->getData());
    }
}
