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
class Text{

    /**
     * @param $chiffre le chiffre à préfixer par des 0 si < 10
     * @return string
     */
    public static function withZero($chiffre){
        if($chiffre < 10){
            return '0' . $chiffre;
        }else{
            return $chiffre;
        }
    }

}
echo Text::withZero(7);