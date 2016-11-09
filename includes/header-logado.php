<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/system/system.php');
$urlBarra = $_GET['url'];
if(($urlBarra == 'animes') || ($urlBarra == 'multimidia')){}else{
    AcessoPrivado();
}
DestruirSessao();
include("includes/head-users.php");