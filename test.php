<?php

use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("Hello world !");

echo $value;