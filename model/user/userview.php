<?php
include_once '../vendor/autoload.php';

class UserView extends Connect
{
      //metódo responsável por retornar array do objeto usuário
    public function view($email)
    {
        try {
            $conn = array();
            $view = $this->sdn->prepare("SELECT * FROM usuario WHERE email = :email LIMIT 1");
            $view->bindValue(':email', $email);
            $view->execute();
            $conn = $view->fetchAll(PDO::FETCH_ASSOC);
            return $conn;
        } catch (PDOException $th) {
            echo "Erro ao conectar o Banco Interno" . $th->getMessage();
        }
    }
}
