<?php header("Content-type: text/css");
$nav  = strripos($_SERVER['HTTP_USER_AGENT'], 'Firefox');
if($nav === false){
?>
.register-content {
    height: 375px;
}

.login-content {
    height: 180px;
}

#amigos-opt {
    position: absolute;
    margin: -35px -10px 0;
}

.user-convite-perfil, .user-convite-perfil img {
    width: 100px;
    height: 100px;
}

.btn-anime-more {
    font-size: 20px;
    margin-bottom: 5px;
}

.favorito-anime-ir {
    font-size: 15px;
}

<?php
}else{
?>

.register-content {
    height: 420px;
}

.login-content {
    height: 210px;
}

#amigos-opt {
    position: absolute;
    margin: -36px 0 0 -10px;
}

#amigos-opt a {
    margin: 0;
}

.user-convite-perfil, .user-convite-perfil img {
    width: 112px;
    height: 112px;
}

.btn-anime-more {
    font-size: 20px;
    margin-bottom: 5px;
    padding: 3px 12px;
}

.favorito-anime-ir {
    font-size: 15px;
    padding: 7px 12px;
}

<?php
}
?>