<?php

class Connect extends Config
{
   public  $conn;
   public  static $config;
   public  function Connectar()
   {

      try {
         self::$config =  Config::gerarConfig();
         $this->conn = new PDO('mysql:dbname=' . self::$db. ';hostname=' . self::$host, self::$root, self::$pass);
      } catch (PDOException $th) {
         echo "Erro no banco de dados" . $th->getMessage();
      }
   }
}
