<?php
include_once './vendor/autoload.php';

class Connect extends Config
{
   public  $conn;



   public  function __construct()
   {
    
      try {
         $this->conn = new PDO('mysql:dbname=' . DB . ';hostname=' . HOST, ROOT, PASS);
      } catch (PDOException $th) {
         echo "Erro no banco de dados" . $th->getMessage();
      }
   }
}
$connect = new Connect();