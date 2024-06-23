#!/usr/bin/php

<?php


// var_dump($argc);
// var_dump($argv);

$from = $argv[1];
$to = $argv[2];

for ($i = $from; $i <= $to; $i++) {
    echo $i . PHP_EOL;
}
