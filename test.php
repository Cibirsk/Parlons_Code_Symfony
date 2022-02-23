<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("1e+3");

var_dump($value);
