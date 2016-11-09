<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/system/system.php';
if(isset($_GET['url'])){
    $url = $_GET['url'];
    if($url == 'index'){
        $url = 'login';
    }
    if($url == 'home'){
        $url = 'inicio';
    }elseif($url == 'multimidia'){
        $url = 'animes';
    }
}
else{
    $url = 'login';
}
$url    = array_filter(explode('/', $url));
$file   = $url[0] . '.php';
if(is_file($file)){
    include $file;
} else{
    include FILE_NOT_FOUND;
}