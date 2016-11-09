<?php
require_once("includes/header-logado.php");
?>

        <title>Animes - <?=SITE_NAME;?></title>
    </head>
    <body>
		<?php include(DIR_INCLUDES."sdk-facebook.php"); ?>
		
        <div id="topo">
            <?php include(DIR_INCLUDES."topo-users.php");?>

        </div>
        <div id="interface">
            <?php include("includes/convites.php"); ?>

            <div class="espaco"></div>
            <div class="espaco"></div>
            <div class="espaco"></div>
            <div class="panel">
                <div class="lista-left">
                    <div class="form-anime">
                        <h1>Faça uma busca personalizada!</h1>
                        <form action="" method="get" enctype="multipart/form-data">
                            <div class="form-left">
                                <label for="fansub" class="lcategoria">Busca por fansub: </label>
                                <select name="fansub" id="fansub" class="categoria-select">
                                    <option value="all">Todos</option>
                                    <option value="anime land">Anime Land</option>
                                    <option value="pa fansub">PA Fansub</option>
                                    <option value="animakai">AnimaKai</option>
                                </select>

                                <label for="data" class="lcategoria">Data de lançamento: </label>
                                <select id="data" name="data" class="categoria-select">
                                    <option value="all">Todas</option>
                                    <option value="all">2008</option>
                                    <option value="all">2009</option>
                                    <option value="all">2010</option>
                                    <option value="all">2011</option>
                                    <option value="all">2012</option>
                                    <option value="all">2013</option>
                                    <option value="all">2014</option>
                                    <option value="all">2015</option>
                                    <option value="all">2016</option>
                                </select>
                            </div>
                            <div class="form-right">
                                <label for="genero" class="lcategoria">Gênero: </label>
                                <select id="genero" name="genero" class="categoria-select">
                                    <option value="all">Todos</option>
                                    <option value="all">Yuri</option>
                                    <option value="all">Ecchi</option>
                                    <option value="all">Shounen</option>
                                    <option value="all">Futanari</option>
                                    <option value="all">Shotakon</option>
                                </select>

                                <label for="tipo" class="lcategoria">Categoria: </label>
                                <select id="tipo" name="tipo" class="categoria-select">
                                    <option value="all">Todas</option>
                                    <option value="all">Anime</option>
                                    <option value="all">OVA</option>
                                    <option value="all">Filme</option>
                                </select>
                            </div>
                            <div class="form-center">
                                <div class="search">
                                    <input type="text" name="nome" placeholder="digite o nome do anime..." class="search-query"/>
                                </div>
                                <h1>Resultados da busca: 12</h1>
                            </div>
                            <div class="submit-content">
                                <input type="submit" name="busca-personalizada" value="Buscar" class="btn btn-enviar"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="espaco"></div>
            <div class="espaco"></div>
            <section id="esquerda">
                <div class="anime-content">
                    <div class="img-content">
                        <img src="<?=URL_IMG.'slide/mugi-chan.jpg'?>" class="img-anime"/>
                    </div>
                    <div class="anime-info">
                        <div class="detalhes-anime">
                            <h1>To Love-Ru Darkness 2nd</h1>
                            <div class="anime-faixa">
                                <h2>Ecchi, Scy-Fi, Shounen, Romance</h2>
                                <p>
                                    um gaysao que so sabe cair em cima de garotas supergostosas
                                    e lindas e que pode burlar as leis da física livremente.
                                </p>
                            </div>
                            <div class="anime-opts">
                                <div class="left">
                                    <a href="#">Assistir Online</a>
                                    <a href="#">Baixar</a>
                                    <a href="#">Adicionar aos Favoritos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaco"></div>
                <div class="anime-content">
                    <div class="img-content">
                        <img src="<?=URL_IMG.'slide/mugi-chan.jpg'?>" class="img-anime"/>
                    </div>
                    <div class="anime-info">
                        <div class="detalhes-anime">
                            <h1>To Love-Ru Darkness 2nd</h1>
                            <div class="anime-faixa">
                                <h2>Ecchi, Scy-Fi, Shounen, Romance</h2>
                                <p>
                                    um gaysao que so sabe cair em cima de garotas supergostosas
                                    e lindas e que pode burlar as leis da física livremente.
                                </p>
                            </div>
                            <div class="anime-opts">
                                <div class="left">
                                    <a href="#">Assistir Online</a>
                                    <a href="#">Baixar</a>
                                    <a href="#">Adicionar aos Favoritos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaco"></div>
                <div class="anime-content">
                    <div class="img-content">
                        <img src="<?=URL_IMG.'slide/mugi-chan.jpg'?>" class="img-anime"/>
                    </div>
                    <div class="anime-info">
                        <div class="detalhes-anime">
                            <h1>To Love-Ru Darkness 2nd</h1>
                            <div class="anime-faixa">
                                <h2>Ecchi, Scy-Fi, Shounen, Romance</h2>
                                <p>
                                    um gaysao que so sabe cair em cima de garotas supergostosas
                                    e lindas e que pode burlar as leis da física livremente.
                                </p>
                            </div>
                            <div class="anime-opts">
                                <div class="left">
                                    <a href="#">Assistir Online</a>
                                    <a href="#">Baixar</a>
                                    <a href="#">Adicionar aos Favoritos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaco"></div>
                <div class="anime-content">
                    <div class="img-content">
                        <img src="<?=URL_IMG.'slide/mugi-chan.jpg'?>" class="img-anime"/>
                    </div>
                    <div class="anime-info">
                        <div class="detalhes-anime">
                            <h1>To Love-Ru Darkness 2nd</h1>
                            <div class="anime-faixa">
                                <h2>Ecchi, Scy-Fi, Shounen, Romance</h2>
                                <p>
                                    um gaysao que so sabe cair em cima de garotas supergostosas
                                    e lindas e que pode burlar as leis da física livremente.
                                </p>
                            </div>
                            <div class="anime-opts">
                                <div class="left">
                                    <a href="#">Assistir Online</a>
                                    <a href="#">Baixar</a>
                                    <a href="#">Adicionar aos Favoritos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaco"></div>
                <div class="anime-content">
                    <div class="img-content">
                        <img src="<?=URL_IMG.'slide/mugi-chan.jpg'?>" class="img-anime"/>
                    </div>
                    <div class="anime-info">
                        <div class="detalhes-anime">
                            <h1>To Love-Ru Darkness 2nd</h1>
                            <div class="anime-faixa">
                                <h2>Ecchi, Scy-Fi, Shounen, Romance</h2>
                                <p>
                                    um gaysao que so sabe cair em cima de garotas supergostosas
                                    e lindas e que pode burlar as leis da física livremente.
                                </p>
                            </div>
                            <div class="anime-opts">
                                <div class="left">
                                    <a href="#">Assistir Online</a>
                                    <a href="#">Baixar</a>
                                    <a href="#">Adicionar aos Favoritos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaco"></div>
                <div class="anime-content">
                    <div class="img-content">
                        <img src="<?=URL_IMG.'slide/mugi-chan.jpg'?>" class="img-anime"/>
                    </div>
                    <div class="anime-info">
                        <div class="detalhes-anime">
                            <h1><a href="#">To Love-Ru Darkness 2nd</a></h1>
                            <div class="anime-faixa">
                                <h2>Ecchi, Scy-Fi, Shounen, Romance</h2>
                                <p>
                                    um gaysao que so sabe cair em cima de garotas supergostosas
                                    e lindas e que pode burlar as leis da física livremente.
                                </p>
                            </div>
                            <div class="anime-opts">
                                <div class="left">
                                    <a href="#">Assistir Online</a>
                                    <a href="#">Baixar</a>
                                    <a href="#">Adicionar aos Favoritos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaco"></div>
            </section>
            <aside id="direita">
                <div class="aside-content lista-anime">
                    <h1>Animes</h1>
                    <div class="aside-links">
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                        <a href="#">Anime</a>
                    </div>
                </div>
            </aside>
        </div>
        <?php include(DIR_INCLUDES.'footer-user.php');?>
    </body>
</html>