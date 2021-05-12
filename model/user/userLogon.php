<?php
include_once './vendor/autoload.php';

class Userlogon extends Connect
{
    //metódo responsável por retornar array do objeto login e senha
    public function logon($email, $senha)
    {
        $sql = array();
        $query = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha LIMIT 1");
        $query->bindValue(':email', $email);
        $query->bindValue(':senha', $senha);
        $query->execute();
        $sql = $query->fetch(PDO::FETCH_ASSOC);
        return $sql;
    }
}