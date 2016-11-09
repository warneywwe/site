<?php header("Content-type: text/css");
$cor = array(
    1   => "#ff4a3d", // cor principal
    2   => "rgba(0, 0, 0, 0.66)", // cor da seleção
    3   => "rgba(0, 0, 0, 0.45)", // cor do fundo da scrollbar
    4   => "#dd4239", // cor de hover do botão da scrollbar
    5   => "#b0342c", // cor de active do botão da scrollbar
    6   => "#d9d9d9", // fundo do site
    7   => "#FFFFFF", // tudo que tiver branco como cor :v
    8   => "#d1d1d1", // hover primario de links
    9   => "#e0e0e0", // fundo de detalhes dos posts
    10  => "rgba(255, 74, 61, 0.42)", // fundo das listra do nome do anime e numero de episodio na postagem
    11  => "#dddddd", // active link titulo do post
    12  => "#ff6b5b", // h1 do aside
    13  => "#ff6e62" // aside link
);
?>
*::selection {
    background-color: <?=$cor[2];?>;
    color: <?=$cor[1];?>;
}

html::-webkit-scrollbar {
    background-color: <?=$cor[3];?>;
}

html::-webkit-scrollbar-thumb {
    background-color: <?=$cor[1];?>;
    border-left: 3px solid <?=$cor[3];?>;
}

html::-webkit-scrollbar-thumb:hover {
    background-color: <?=$cor[4];?>;
}

html::-webkit-scrollbar-thumb:active {
    background-color: <?=$cor[5];?>;
}

body {
    background-color: <?=$cor[6];?>;
    color: <?=$cor[7];?>;
}

a {
    color: <?=$cor[7];?>;
}

a:hover {
    color: <?=$cor[8];?>;
}

#topo {
    background-color: <?=$cor[1];?>;
}

#menu a {
    color: <?=$cor[7];?>;
}

#menu a:hover {
    background-color: <?=$cor[7];?>;
    color: <?=$cor[1];?>;
}

.active {
    background-color: <?=$cor[7];?>;
    color: <?=$cor[1];?> !important;
    border-bottom: 3px solid <?=$cor[1];?>;
}

.seta:before {
    border-top: 5px solid <?=$cor[7];?>;
}

.user-dropdown a {
    color: <?=$cor[7];?>;
}

.user-dropdown a:hover {
    color: <?=$cor[1];?>;
    background-color: <?=$cor[7];?>;
}

.user-dropdown {
    background-color: <?=$cor[1];?>;
}

#header {
    border: 5px solid <?=$cor[1];?>;
}

.caixa {
    background-color: <?=$cor[1];?>;
}

.titulo-post a, .titulo-post a:hover {
    color: <?=$cor[7];?>;
}

.titulo-post a:active {
    color: <?=$cor[11];?>;
}

.detalhes-post {
    background-color: <?=$cor[9];?>;
}

.detalhes-post h1 {
    color: <?=$cor[1];?>;
}

.conteudo {
    background-color: <?=$cor[7];?>;
}

blockquote {
    color: <?=$cor[1];?>;
    border-left: 5px solid <?=$cor[1];?>;
}

.publish {
    background-color: <?=$cor[1];?>;
}

.dropdown-opts {
    background-color: <?=$cor[1];?>;
    border: 1px solid <?=$cor[7];?>;
}

.dropdown-opts a:hover {
    background-color: <?=$cor[7];?>;
    color: <?=$cor[1];?>;
}

.dropdown-nome, .dropdown-info {
    background-color: <?=$cor[10];?>;
}

.help, .help a {
    color: <?=$cor[1];?>;
}

.aside-content {
    background-color: <?=$cor[13];?>;
}

.aside-content h1 {
    background-color: <?=$cor[12];?>;
}

.aside-links a:hover {
    color: <?=$cor[1];?>;
    background-color: <?=$cor[7];?>;
}

#rodape {
    background-color: <?=$cor[1];?>;
}

.anime-content {
    background-color: <?=$cor[7];?>;
    border: 5px solid <?=$cor[1];?>;
}

.anime-content * {
    color: <?=$cor[1];?>;
}

.detalhes-anime h1 a {
    color: <?=$cor[1];?>;
}

.anime-faixa {
    background-color: <?=$cor[1];?>;
}

.anime-faixa h2, .anime-faixa p {
    color: <?=$cor[7];?>;
}

.left a:hover {
    background-color: <?=$cor[1];?>;
    color: <?=$cor[7];?>;
}

.lista-left {
    background-color: <?=$cor[1];?>;
}

.title h1, .copyright * {
    color: <?=$cor[1];?>;
}

.categoria-select {
    color: <?=$cor[1];?>;
    background: <?=$cor[7];?> url("../img/content/seta.png") no-repeat 95% 50%;
}

.categoria-select *:optional {
    background-color: <?=$cor[1];?>;
}

#search form input {
    color: <?=$cor[1];?>;
}