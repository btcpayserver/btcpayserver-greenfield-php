<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

use BTCPayServer\Util\PreciseNumber;

class StoreOnChainWalletTransaction extends AbstractResult
{
    public function getTransactionHash(): string
    {
        $data = $this->getData();
        return $data['transactionHash'];
    }

    public function getComment(): string
    {
        $data = $this->getData();
        return $data['comment'];
    }

    public function getAmount(): PreciseNumber
    {
        $data = $this->getData();
        return new PreciseNumber($data['amount']);
    }

    public function getLabels(): array
    {
        $data = $this->getData();
        return $data['labels'];
    }

    public function getBlockHash(): ?string
    {
        $data = $this->getData();
        return $data['blockHash'];
    }

    public function getBlockHeight(): ?int
    {
        $data = $this->getData();
        return $data['blockHeight'];
    }

    public function getConfirmations(): int
    {
        $data = $this->getData();
        return $data['confirmations'];
    }

    public function getTimestamp(): int
    {
        $data = $this->getData();
        return $data['timestamp'];
    }

    public function getStatus(): string
    {
        $data = $this->getData();
        return $data['status'];
    }
}
