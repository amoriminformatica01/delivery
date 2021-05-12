<?php
include_once './vendor/autoload.php';
class Config
{
    public static function gerarConfig()
    {
        define('HOST', 'locailhost');
        define('ROOT', 'root');
        define('PASS', '');
        define('DB', 'eurodelivery');
    }
}
$config = new Config();
$config->gerarConfig();
