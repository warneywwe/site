<?php
require_once("includes/header-logado.php");
?>

        <title><?=SITE_NAME;?></title>
    </head>
    <body>
        <?php include("includes/sdk-facebook.php"); ?>

        <div id="topo">
            <?php include("includes/topo-users.php");?>

        </div>
        <div style="width: auto; height: 10px;"></div>
        <div id="header">
            <?php include("includes/slides.php");?>

        </div>
        <div id="interface">
            <?php include("includes/convites.php"); ?>

            <section id="esquerda">
                <?php include("includes/feed-posts.php");?>

            </section>
            <aside id="direita">
                <div class="aside-content">
                    <h2>Seu rank atual é 1º</h2>
                </div>
                <div class="aside-content">
                    <h1>Navegação</h1>
                    <div class="aside-links">
                        <a href="#">Bate-Papo</a>
                        <a href="#">Lançamentos</a>
                        <a href="#">Recomendações</a>
                        <a href="#">Usuários</a>
                        <a href="#">Forum</a>
                        <a href="#">Regras do Site</a>
                    </div>
                </div>
                <div class="aside-content">
                    <h1>Top Usuários</h1>
                    <div class="aside-links">
                        <a href="#">User</a>
                        <a href="#">User</a>
                        <a href="#">User</a>
                        <a href="#">User</a>
                        <a href="#">User</a>
                        <a href="#">User</a>
                        <a href="#">User</a>
                        <a href="#">User</a>
                    </div>
                </div>
                <div class="aside-content">
                    <h1>Top Animes</h1>
                    <div class="aside-links">
                        <a href="#">Naruto Shippudden</a>
                        <a href="#">Rewrite</a>
                        <a href="#">Momokuri</a>
                        <a href="#">Clannad</a>
                        <a href="#">Bleach</a>
                        <a href="#">Shimoneta</a>
                        <a href="#">Sousei no Onmyouji</a>
                        <a href="#">User</a>
                    </div>
                </div>
            </aside>
        </div>
        <div class="espaco"></div>
        <?php include("includes/footer-user.php"); ?>
    </body>
</html>