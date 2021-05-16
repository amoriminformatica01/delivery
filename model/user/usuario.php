<?php

class Usuario extends Connect 
{
    public static $connect;
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
        header('./locatin:home.php');
    }
    public function viewUser($email)
    {
        try {
            self::$connect = Connect::Connectar();
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
    public  function createUser($nome, $sobre_nome, $email, $senha, $telefone, $cep, $rua, $bairro, $cidade, $uf, $data_de_cadastro)
    {
        try {
            $insert = $this->conn->prepare("INSERT INTO usuario (nome, sobre_nome, email, senha, telefone, cep, rua, bairro, cidade, uf, data_de_cadastro)
            VALUES(:n, :s, :e, :sn, :t, :dc)");
            $insert->bindValue(':nome', $nome);
            $insert->bindValue(':sobre_nome', $sobre_nome);
            $insert->bindValue(':email', $email);
            $insert->bindValue(':senha', $senha);
            $insert->bindValue(':telefone', $telefone);
            $insert->bindValue(':cep', $cep);
            $insert->bindValue(':rua', $rua);
            $insert->bindValue(':bairro', $bairro);
            $insert->bindValue(':cidade', $cidade);
            $insert->bindValue(':uf', $uf);
            $insert->bindValue(':data_de_cadastro', $data_de_cadastro);
            $insert->execute();
        } catch (PDOException $th) {
            echo "não foi possivel inserir no banco de dados" . $th->getMessage();
        }
    }
    public function updateUser($id, $nome, $sobre_nome, $email, $senha, $telefone, $data_de_cadastro)
    {
        try {
            $update = $this->conn->prepare("UPDATE usuario set nome=:n, sobre_nome=:s, email=:e, senha=:sn, telefone=:t, data_de_cadastro=:dc WHERE id=:id");
            $update->bindValue(':id', $id);
            $update->bindValue(':n', $nome);
            $update->bindValue(':s', $sobre_nome);
            $update->bindValue(':e', $email);
            $update->bindValue(':sn', $senha);
            $update->bindValue(':t', $telefone);
            $update->bindValue(':dc', $data_de_cadastro);
            $update->execute();
        } catch (PDOException $th) {
            echo "não foi possivel atualizar no banco de dados" . $th->getMessage();
        }
    }
    public function deleteUser($id)
    {
        try {
            $delete = $this->conn->prepare("DELETE FROM usuario WHERE id = :id");
            $delete->bindValue(':id', $id);
            $delete->execute();
        } catch (PDOException $th) {
            echo "não foi possivel atualizar no banco de dados" . $th->getMessage();
        }
    }
}
