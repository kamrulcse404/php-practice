#!/usr/bin/php

<?php

// $shortOptions = "f:t::";
$longOptions = ["from:", "to::"];

$options = getopt("", $longOptions);

$from = $options["from"];
$to = $options["to"];

// var_dump($options);

for ($i = $from; $i <= $to; $i++) {
    echo $i . PHP_EOL;
}
