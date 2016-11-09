<div class="content">
                <h1 class="titulo">
                    <a href="<?=URL_DASHBOARD;?>">
                        <?=SITE_NAME;?>

                    </a>
                </h1>
    <?php
    $class   = ' class="active"';
    $ic      = false;
    $ac      = false;
    $optc    = false;
    $get = $_GET['url'];
    if(($get == "inicio") || ($get == "home")){
        $ic = $class;
    }elseif(($get == "anime") || ($get == "animes") || ($get == "multimidia")){
        $ac = $class;
    }elseif( (($get == "ova") || ($get == "OVA")) || (($get == "ovas") || ($get == "OVAs")) ){
        $ac = $class;
    }elseif($get == "amigos"){
        $optc = $class;
    }
    ?>
                <div id="menu">
                    <?php
                    if(IsLogged()) {
                        ?>
                        <a<?= $optc; ?>>
                            <div class="dropdown-hover">
                                Opções de Usuário
                                <div class="menu-dropdown">
                                    <a href="amigos">Amigos</a>
                                    <a id="convites-head">Solicitações</a>
                                    <a href="favoritos">Favoritos</a>
                                    <a href="#">Forum</a>
                                </div>
                            </div>
                        </a>
                        <a href="multimidia"<?= $ac; ?>>Multimídia</a>
                        <a href="noticias">Notícias</a>
                        <a href="faq">F.A.Q</a>
                        <?php
                    }else {
                        ?>
                        <p><a href="../login">Faça login</a> ou <a href="../registro">cadastre-se</a> para usufruir de
                            todos os beneficios do site!</p>
                        <?php
                    }
                    ?>
                </div>
                <div id="search">
                    <div class="search-class">
                        <form action="" method="get" enctype="multipart/form-data">
                            <input type="text" name="palavra" placeholder="faça uma pesquisa..."/>
                        </form>
                    </div>
                </div>
                <div id="opts">
                    <?php
                    if(IsLogged()) {
                        ?>
                        <div class="perfil-user">
                            <img src="<?=PrintarFoto();?>" class="main-user"/>
                        </div>
                        <div class="name-user">
                            <span class="nome-user" id="drop-head"><?= RecuperarUser('nome'); ?> <b
                                    class="seta"></b></span>

                            <div class="dropdown user-dropdown" id="drop-body">
                                <a href="#">Administração</a>
                                <a href="#">Alterar Tema do Site</a>
                                <a href="#">Perfil</a>
                                <a href="?sair">Sair</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>