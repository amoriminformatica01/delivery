<?php
session_start();
include_once '../../vendor/autoload.php';
class ValidarLogin extends UserCreate
{
    public $connect;
    public $validarLogin;
    function __construct()
    {
        if (isset($_POST['Validar'])) {

            if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
                $senha = md5($senha);
                $query = UserCreate::logonUser($email, $senha);
                $conn = $query;
                if ($conn) {
                    $_SESSION['nome'] = $conn['nome'];
                    $_SESSION['sobre_nome'] = $conn['sobre_nome'];
                    $_SESSION['email'] = $conn['email'];
                    $_SESSION['telefone'] = $conn['telefone'];
                    $_SESSION['cep'] = $conn['cep'];
                    $_SESSION['rua'] = $conn['rua'];
                    $_SESSION['cidade'] = $conn['cidade'];
                    $_SESSION['item'] = $conn['item'];
                    $_SESSION['valor'] = $conn['valor'];
                    $_SESSION['quantidade'] = $conn['quantidade'];

                    header("location:../../");
                } else {
                    header("location:../../");
                    $_SESSION["LogonError"] = "Usuario ou Senha não estão validos, favor rever os campos.";
                }
            }
        }
    }
}
$validarLogin = new ValidarLogin();