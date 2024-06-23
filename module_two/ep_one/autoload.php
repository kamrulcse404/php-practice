<?php

spl_autoload_register(function($className){
    $baseDir = __DIR__ . "/app/";
    $file = $baseDir . $className . '.php';

    if (file_exists($file)) {
        require_once $file;
    }else {
        echo "File for class $className does not exist.";
    }
    
});