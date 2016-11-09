<?php
require_once 'class/Livro.class.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>POO - PHP</title>
    </head>
    <body>
    <?php
    $livro = new \classLivros\Livro();
    $livro->setNome('Cuz cuz');
    $livro->setAutor('Arroz');
    $livro->setEditora('Feijão');
    $livro->setPaginas('408');
    $livro->setTamanho('40 cm²');

    echo "<pre>";
    echo "Nome do livro: " . $livro->getNome() . "<br/>";
    echo "Nome do autor: " . $livro->getAutor() . "<br/>";
    echo "Nome da editora: " . $livro->getEditora() . "<br/>";
    echo "Número de páginas: " . $livro->getPaginas() . "<br/>";
    echo "Área do tamanho do livro: " . $livro->getTamanho() . "<br/><p></p>";
    $livro->AlphaBeto();
    ?>
    </body>
</html>