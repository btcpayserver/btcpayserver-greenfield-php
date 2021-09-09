<?php

declare(strict_types=1);

namespace BTCPayServer\Client;

abstract class AbstractStorePaymentMethodClient extends AbstractClient
{
    abstract public function getPaymentMethods(string $storeId);
    abstract public function getPaymentMethod(string $storeId, string $cryptoCode);
    abstract public function updatePaymentMethod(string $storeId, string $cryptoCode, array $settings);
    abstract public function removePaymentMethod(string $storeId, string $cryptoCode);
}
