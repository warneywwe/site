<div class="content">
            <h1 class="titulo">
                <a href="<?=URL_DASHBOARD;?>">
                    <?=SITE_NAME;?>

                </a>
            </h1>
            <div id="menu">
                <?php
                if(IsLogged()) {
                    ?>
                    <a href="">
                        <div class="dropdown-hover" id="drop-down">
                            Opções de Usuário
                            <div class="menu-dropdown" id="menu-drop">
                                <a href="../amigos">Amigos</a>
                                <a id="convites-head">Solicitações</a>
                                <a href="favoritos">Favoritos</a>
                                <a href="#">Forum</a>
                            </div>
                        </div>
                    </a>
                <a href="multimidia">Multimídia</a>
                    <a href="noticias">Notícias</a>
                <a href="faq">F.A.Q</a>
            </div>
            <div id="search">
                <div class="search-class">
                    <form action="" method="get" enctype="multipart/form-data">
                        <input type="text" name="palavra" placeholder="faça uma pesquisa..."/>
                    </form>
                </div>
            </div>
            <div id="opts">
                    <div class="perfil-user">
                        <img src="<?=PrintarFoto();?>" class="main-user"/>
                    </div>
                    <div class="name-user">
                        <span class="nome-user" id="drop-head"><?= RecuperarUser('nome'); ?></span> <b class="seta"></b>
                        <div class="dropdown user-dropdown" id="drop-body">
                            <a href="#">Administração</a>
                            <a href="#">Alterar Tema do Site</a>
                            <a href="#">Perfil</a>
                            <a href="?sair">Sair</a>
                        </div>
                    </div>
                    <?php
                }else {
                        ?>
                    <p><a href="../login">Faça login</a> ou <a href="../registro">cadastre-se</a> para usufruir de todos os beneficios do site!</p>
                </div>
                <div id="opts">
                        <div id="search">
                            <div class="search-class">
                                <form action="../procura.php" method="get" enctype="multipart/form-data">
                                    <input type="text" name="palavra" placeholder="faça uma pesquisa..."/>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>