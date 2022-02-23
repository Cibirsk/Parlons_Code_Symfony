<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$value = Yaml::parseFile(__DIR__ . '/demo.yaml');

echo($value);
