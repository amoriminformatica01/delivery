<?php
class  UserCreate extends Connect
{
    public  $conn;
    public  $connect;
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
    public  function logonUser($email, $senha)
    {
        $this->connect = Connect::Connectar();
        $sql = array();
        $query = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha LIMIT 1");
        $query->bindValue(':email', $email);
        $query->bindValue(':senha', $senha);
        $query->execute();
        $sql = $query->fetch(PDO::FETCH_ASSOC);
        return $sql;
    }
    public  function createUser($nome, $sobre_nome, $email, $senha, $telefone, $cep, $rua, $bairro, $cidade, $uf, $data_de_cadastro)
    {
        try {
            $this->connect = Connect::Connectar();
            $insert = $this->conn->prepare("INSERT INTO usuario (nome, sobre_nome, email, senha, telefone, cep, rua, bairro, cidade, uf, data_de_cadastro)
VALUES(:nome, :sobre_nome, :email, :senha, :telefone, :cep, :rua, :bairro, :cidade, :uf, :data_de_cadastro)");
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
}
