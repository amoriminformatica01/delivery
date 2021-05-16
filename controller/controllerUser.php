<?php

class ControllerUser extends Usuario
{
  
   

    public function insertUser()
    {
        //método responsável na criação de usuário no banco de dados.

        if (isset($_POST['Cadastrar'])) {
            $email = addslashes($_POST['email']);
            $this->view = new Usuario();
            $conn = $this->view->ViewUser($email);


            if ($conn) {
                header("location:./home.php");
                $_SESSION["USerExist"] = "Usuário já existe!!!";
            } else {

                echo $nome = addslashes($_POST['nome']);
                $sobre_nome = addslashes($_POST['sobre_nome']);
                $email = addslashes($_POST['email']);
                $senha =  md5($_POST['senha']);
                $telefone = addslashes($_POST['telefone']);
                $cep = addslashes($_POST['cep']);
                $rua = addslashes($_POST['rua']);
                $bairro = addslashes($_POST['bairro']);
                $cidade = addslashes($_POST['cidade']);
                $uf = addslashes($_POST['uf']);
                $data_de_cadastro = addslashes($_POST['data_de_cadastro']);
                $conn  = new Usuario();
                $conn->createUser($nome, $sobre_nome, $email, $senha, $telefone, $cep, $rua, $bairro, $cidade, $uf, $data_de_cadastro);
                header("location:./home.php");
                $_SESSION["sucessUser"] = "Usuário cadastrado com sucesso!!!";
            }
        }
    }
}
