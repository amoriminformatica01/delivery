<?php
session_start();
include_once '../vendor/autoload.php';
class logoutAdmin
{

    function __construct()
    {
       
            unset(
            $_SESSION['nome'],
            $_SESSION['sobre_nome'],
            $_SESSION['email']);
            $_SESSION['sairSucesso'] ="Deslogado com Sucesso!!!";
           header("location:../../");
        
    }
}
$logout = new logoutAdmin();
var_dump($logout);