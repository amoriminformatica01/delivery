<?php
session_start();
include_once '../vendor/autoload.php';
class ControllerUser  extends UserCreate
{
    public $connect;
    public $controllerUser;
    public function insertUser()
    {
        if (isset($_POST['Cadastrar'])) {
            $email = addslashes($_POST['email']);
            $query = UserCreate::viewUser($email);
            $conn = $query;
            if ($conn) {
                header("location:../#");
                $_SESSION["userExist"] = "Usuário já existe!!!";
            } else {
                $nome = addslashes($_POST['nome']);
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
                $conn = UserCreate::createUser($nome, $sobre_nome, $email, $senha, $telefone, $cep, $rua, $bairro, $cidade, $uf, $data_de_cadastro);
                header("location:../#");
                $_SESSION["sucessUser"] = "Usuário cadastrado com sucesso!!!";
            }
        }
    }
}
$controllerUser = new ControllerUser();
$controllerUser->insertUser();
