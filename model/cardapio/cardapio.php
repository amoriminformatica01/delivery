<?php
include_once './vendor/autoload.php';

class Cardapio extends Connect
{

    
   public function VerCardapio()
    {
        try {
            $mostrar = array();
            $view = $this->conn->prepare("SELECT * FROM cardapio  ");
            $view->execute();
            $mostrar = $view->fetchAll(PDO::FETCH_ASSOC);
            return $mostrar;
        } catch (PDOException $th) {
            echo "Erro ao conectar o Banco Interno" . $th->getMessage();
        }
    }
}
$cardapio = new Cardapio();
$cardapio->VerCardapio();