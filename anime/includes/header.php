<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/system/system.php');
DestruirSessao();
if(IsLogged()){
    $_dadoUser = RecuperarUser();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="../img/content/favicon.png"/>
        <link rel="stylesheet" href="../css/dashboard.css"/>
        <link rel="stylesheet" href="../css/font.css"/>
        <link rel="stylesheet" href="../css/estilo.css.php"/>
        <link rel="stylesheet" href="css/anime.css.php"/>
        <link rel="stylesheet" href="../flex-slider/flexslider.css"/>
        <title>To love ru</title>
    </head>