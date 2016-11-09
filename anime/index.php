<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/system/system.php';
if(isset($_GET['paginacao'])){
    $paginacao = $_GET['paginacao'];
    if(($paginacao == 'index') || ($paginacao == 'home')){
        Redirect(URL_BASE);
    }elseif($paginacao == 'multimidia'){
        Redirect(URL_BASE.'multimidia');
    }
}else{
    Redirect(URL_BASE);
}
$paginacao  = array_filter(explode('/', $paginacao));
$file       = $paginacao[0] . '.php';
if(is_file($file)){
    include $file;
} else{
    Redirect(URL_BASE.'404');
}