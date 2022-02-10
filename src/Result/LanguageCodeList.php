<?php

declare(strict_types=1);

namespace BTCPayServer\Result;

class LanguageCodeList extends AbstractListResult
{
    /**
     * @return \BTCPayServer\Result\LanguageCode[]
     */
    public function getLanguageCodes(): array
    {
        $languageCodes = [];
        foreach ($this->getData() as $languageCode) {
            $languageCodes[] = new \BTCPayServer\Result\PullPaymentPayout($languageCode);
        }
        return $languageCodes;
    }
}
