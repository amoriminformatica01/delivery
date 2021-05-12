<?php
include_once '../vendor/autoload.php';

class UserDelete extends Connect
{
    //metódo responsável por deletar dados de  usuário
    public function delete($id)
    {
        try {
            $delete = $this->sdn->prepare("DELETE FROM usuario WHERE id = :id");
            $delete->bindValue(':id', $id);
            $delete->execute();
        } catch (PDOException $th) {
            echo "não foi possivel atualizar no banco de dados" . $th->getMessage();
        }
    }
}
