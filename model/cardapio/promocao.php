<?php
//include_once './vendor/autoload.php';

class Promocao extends Connect
{
    public  $conn;
    public  $connect;
    public function VerPromocao()
    {
        try {
            $this->connect = Connect::Connectar();
            $mostrar = array();
            $view = $this->conn->prepare("SELECT * FROM cardapio WHERE promocao='ativo' LIMIT 14");
            $view->execute();
            $mostrar = $view->fetchAll(PDO::FETCH_ASSOC);
            return $mostrar;
        } catch (PDOException $th) {
            echo "Erro ao conectar o Banco Interno" . $th->getMessage();
        }
    }
}
