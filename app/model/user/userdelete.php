<?php
abstract class UserDelete extends Connect
{
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
