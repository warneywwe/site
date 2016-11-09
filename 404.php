<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/system/system.php');
include(DIR_INCLUDES.'/head-users.php');
?>

    <title>Página não Encontrada - <?=SITE_NAME;?></title>
</head>
<body>
    <div id="nav-404">
        <a href="#" id="head"><b class="seta-bottom" id="drop-seta-404"></b>Navegação</a>
        <div class="drop-404">
            <?php
            if(IsLogged()) {
                ?>
                <a href="<?= URL_DASHBOARD; ?>">Página Inicial</a>
                <a href="#">Favoritos</a>
                <a href="#">Notícias</a>
                <?php
            }else {
                ?>
                <a href="<?= URL_LOGIN; ?>">Login</a>
                <a href="<?= URL_REGISTER ?>">Cadastro</a>
                <?php
            }
            ?>
            <a href="<?=URL_BASE.'animes'?>" style="border-radius: 0 0 0 10px">Animes</a>
        </div>
    </div>
    <div id="interface-404">
<?php
if(IsLogged()){
    if(RecuperarUser('sexo') == 'm'){
        ?>
        <div class="erro-404">
            <p>
                Foi mal, onii-chan. Essa página/arquivo não existe em nosso servidor.
            </p>
        </div>
        <div class="erro-404-type1"></div>
        <?php
    }else{
        ?>
        <div class="erro-404">
            <p>
                Foi mal, onee-chan. Essa página/arquivo não existem em nosso servidor.
            </p>
        </div>
        <div class="erro-404-type1"></div>
        <?php
    }
}else{
    ?>
    <div class="erro-404">
        <p>
            Desculpe, essa página/arquivo não existe em nosso servidor.
        </p>
    </div>
    <div class="erro-404-type1"></div>
    <?php
}
?>
    </div>
    <?php
    include(DIR_INCLUDES."footer-user.php");
    ?>
</body>
</html>