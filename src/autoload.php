<?php

spl_autoload_register(function ($className) {

    // Stop here if class already loaded to avoid filesystem I/O.
    if (class_exists($className, false)) {
        return;
    }

    $dirs = [
      'Client',
      'Exception',
      'Http',
      'Result',
      'Util',
    ];

    foreach ($dirs as $dir) {
        $replace = 'BTCPayServer\\' . $dir . '\\';
        $fileName = str_replace($replace, '', $className);
        $filePath = __DIR__ . "/$dir/$fileName.php";
        if (file_exists($filePath)) {
            require_once($filePath);
            return;
        }
    }
});
