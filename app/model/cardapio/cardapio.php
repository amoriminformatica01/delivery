<?php
class Cardapio extends Connect
{
    public  $conn;
    private static $connect;

    public function VerCardapio()
    {
        try {
            self::$connect = Connect::Connectar();
            $mostrar = array();
            $view = $this->conn->prepare("SELECT * FROM cardapio WHERE tipo='normal' ");
            $view->execute();
            $mostrar = $view->fetchAll(PDO::FETCH_ASSOC);
            return $mostrar;
        } catch (PDOException $th) {
            echo "Erro ao conectar o Banco Interno" . $th->getMessage();
        }
    }
}
