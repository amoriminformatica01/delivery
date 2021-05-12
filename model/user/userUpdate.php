<?php
include_once '../vendor/autoload.php';

class UserUpdate extends Connect
{

    //metódo responsável atualizar os dados do usuário
    public function update($id, $nome, $sobre_nome, $email, $senha, $telefone, $data_de_cadastro)
    {
        try {
            $update = $this->sdn->prepare("UPDATE usuario set nome=:n, sobre_nome=:s, email=:e, senha=:sn, telefone=:t, data_de_cadastro=:dc WHERE id=:id");
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
}
