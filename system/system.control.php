<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/system/system.php');

//Fazer login
if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $usuario        = $_POST['usuario'];
    $senha          = $_POST['senha'];
    sleep(1);
    LoginUser($usuario, $senha);
}
