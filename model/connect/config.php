<?php
class Config
{

    protected static $host;
    protected static $root;
    protected static $db;
    protected static $pass;
    protected static $config;

    public  function gerarConfig()
    {
        self::$host = "localhost";
       //return self::$host;
        self::$root = "root";
        //return self::$root;
        self::$pass = "";
        //return self::$pass;
        self::$db = "eurodelivery";
        //return self::$db;
    }
}

