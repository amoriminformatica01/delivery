<?php
include_once './vendor/autoload.php';

class Promocao extends Connect
{

    
   public function VerPromocao()
    {
        try {
            $mostrar = array();
            $view = $this->conn->prepare("SELECT * FROM cardapio WHERE promocao='ativo' LIMIT 3");
            $view->execute();
            $mostrar = $view->fetchAll(PDO::FETCH_ASSOC);
            return $mostrar;
        } catch (PDOException $th) {
            echo "Erro ao conectar o Banco Interno" . $th->getMessage();
        }
    }
}
$promocao = new Promocao();
$promocao->VerPromocao();