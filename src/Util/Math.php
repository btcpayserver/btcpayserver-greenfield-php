<?php
declare(strict_types=1);

namespace BTCPayServer\Util;

class Math
{
    public const PRECISION = 8;


    public static function add(PreciseNumber $a, PreciseNumber $b): PreciseNumber
    {
        // BTC sats are 8 decimals.
        $oldScale = bcscale(self::PRECISION);

        $newValue = bcadd((string)$a, (string)$b);

        // Reset to the original scale after calculation
        bcscale($oldScale);

        return PreciseNumber::parseString($newValue);
    }

}