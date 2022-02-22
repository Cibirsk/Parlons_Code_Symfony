<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("Hello world !");

echo $value;

/*
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('Hello World!'); // hello-world
*/