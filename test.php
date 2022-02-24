<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

use Symfony\Component\Yaml\Exception\ParseException;


try {
    $value = Yaml::parseFile(__DIR__ . '/demo.yaml');
    dump($value);
} catch (ParseException $exception) {
    printf('Unable to parse the YAML string: %s', $exception->getMessage());
}