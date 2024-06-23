#!/usr/bin/php

<?php

// $shortOptions = "f:t::";
$longOptions = ["from:", "to::"];

$options = getopt("", $longOptions);

$contents = file_get_contents($options["from"]);

file_put_contents($options["to"], $contents);