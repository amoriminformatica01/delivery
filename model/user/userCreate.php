<?php
include_once '../vendor/autoload.php';

class UserCreate extends Connect
{
    //metódo responsável por inserir dados usuário
    public function create($nome, $sobre_nome, $email, $senha, $telefone, $data_de_cadastro)
    {
        try {
            $insert = $this->sdn->prepare("INSERT INTO usuario (nome, sobre_nome, email, senha, telefone, data_de_cadastro)
            VALUES(:n, :s, :e, :sn, :t, :dc)");
            $insert->bindValue(':n', $nome);
            $insert->bindValue(':s', $sobre_nome);
            $insert->bindValue(':e', $email);
            $insert->bindValue(':sn', $senha);
            $insert->bindValue(':t', $telefone);
            $insert->bindValue(':dc', $data_de_cadastro);
            $insert->execute();
        } catch (PDOException $th) {
            echo "não foi possivel inserir no banco de dados" . $th->getMessage();
        }
    }
}
