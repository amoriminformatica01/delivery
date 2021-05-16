<?php


class Promocao extends Connect
{
    public  $conn;
    public static $connect;
    
   public function VerPromocao()
    {
        try {
            self::$connect = Connect::Connectar();
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
