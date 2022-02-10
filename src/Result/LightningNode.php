<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class LightningNode extends AbstractResult
{
    /**
     * @return array strings
     */
    public function getNodeURIs(): array
    {
        $data = $this->getData();
        return $data['nodeURIs'];
    }

    public function getBlockHeight(): int
    {
        $data = $this->getData();
        return $data['blockHeight'];
    }
}
