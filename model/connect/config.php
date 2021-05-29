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
        $this->root = "root";
        //return$this->root;
        $this->pass = "";
        //return $this->pass;
        $this->db = "eurodelivery";
        //return $this->$db;
    }
}
