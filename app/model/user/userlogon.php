<?php

 class UserLogon extends Connect
{
public static $connect;
public  $conn;
    public  function logonUser($email, $senha)
    {
        self::$connect = Connect::Connectar();
        $sql = array();
        $query = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha LIMIT 1");
        $query->bindValue(':email', $email);
        $query->bindValue(':senha', $senha);
        $query->execute();
        $sql = $query->fetch(PDO::FETCH_ASSOC);
        return $sql;
        header('../../');
    }
}
