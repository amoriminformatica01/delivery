<?php
include_once './vendor/autoload.php';
interface User  
{
    public  function logonUser();
    public  function createUser();
    public  function updateUser();
    public  function viewUser();
    public  function deleteUser();
}
$user = new User(); 
$user->logonUser();