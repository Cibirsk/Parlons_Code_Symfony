<?php
/*
use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("Hello world !");

echo $value;
*/
require 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('Hello World! l école est cool'); // hello-world