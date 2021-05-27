<?php
//include_once './vendor/autoload.php';
class Connect extends Config
{
   public  $config;
   public $conn;
   public   function Connectar()
   {
      try {
         $this->config = Config::gerarConfig();
         $this->conn = new PDO('mysql:dbname=' . $this->db . ';hostname=' . $this->host, $this->root, $this->pass);
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $th) {
         echo "Erro no banco de dados" . $th->getMessage();
      }
   }
}
