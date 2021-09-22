<?php

spl_autoload_register(function ($className) {

    // Abort here if we do not try to load BTCPayServer namespace.
    if (strpos($className, 'BTCPayServer') === false) {
        return;
    }

    $parts = explode('\\', $className);
    if (count($parts) === 3) {
        $filePath = __DIR__ . "/{$parts[1]}/{$parts[2]}.php";
        if (file_exists($filePath)) {
            require_once($filePath);
            return;
        }
    }
});
