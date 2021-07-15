<?php

declare(strict_types=1);

namespace BTCPayServer\Util;

class Formatter
{
    /**
     * Convert an object with private properties to an array while skipping
     * empty/unset object properties.
     *
     * @param $object
     *
     * @return array
     */
    public static function objectToArrayNoEmpty($object): array
    {
        $array = [];
        // Convert Object properties to array including protected/private.
        $filtered_array = array_filter((array)$object);
        // Strip * protected/private indicator from array key.
        foreach ($filtered_array as $k => $v) {
            $array[trim(str_replace('*', '', $k))] = $v;
        }

        return $array;
    }
}
