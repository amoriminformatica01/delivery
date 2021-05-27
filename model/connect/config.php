<?php
//include_once '../vendor/autoload.php';
class Config
{
    public  $host;
    public  $root;
    public  $db;
    public  $pass;
    public  function gerarConfig()
    {
        $this->host = "localhost";
        //return $this->host;
        $this->root = "eurodeli_admin";
        //return$this->root;
        $this->pass = "@Asj20508";
        //return $this->pass;
        $this->db = "eurodeli_eurodelivery";
        //return $this->$db;
    }
}
