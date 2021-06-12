<?php
class UserView extends Connect
{
    public static $connect;
    public $conn;
    public  function viewUser($email)
    {
        try {
            $this->connect = Connect::Connectar();
            $conn = array();
            $view = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email LIMIT 1");
            $view->bindValue(':email', $email);
            $view->execute();
            $conn = $view->fetchAll(PDO::FETCH_ASSOC);
            return $conn;
        } catch (PDOException $th) {
            echo "Erro ao conectar o Banco Interno" . $th->getMessage();
        }
    }
}
