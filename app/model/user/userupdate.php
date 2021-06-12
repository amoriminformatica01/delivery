<?php
abstract class UserUpdate extends Connect
{

    public function updateUser($id, $nome, $sobre_nome, $email, $senha, $telefone, $cep, $rua, $bairro, $cidade, $uf, $data_de_cadastro)
    {
        try {
            $update = $this->conn->prepare("UPDATE usuario set nome=:nome, sobre_nome=:sobre_nome, email=:email, senha=:senha, telefone=:telefone, cep=:cep, rua=:rua, bairro=:bairro, cidade=:cidade, uf=:uf, data_de_cadastro=:data_de_cadastro WHERE id=:id");
            $update->bindValue(':id', $id);
            $update->bindValue(':nome', $nome);
            $update->bindValue(':sobre_nome', $sobre_nome);
            $update->bindValue(':email', $email);
            $update->bindValue(':senha', $senha);
            $update->bindValue(':telefone', $telefone);
            $update->bindValue(':cep', $cep);
            $update->bindValue(':rua', $rua);
            $update->bindValue(':bairro', $bairro);
            $update->bindValue(':cidade', $cidade);
            $update->bindValue(':uf', $uf);
            $update->bindValue(':data_de_cadastro', $data_de_cadastro);
            $update->execute();
        } catch (PDOException $th) {
            echo "não foi possivel atualizar no banco de dados" . $th->getMessage();
        }
    }
}
