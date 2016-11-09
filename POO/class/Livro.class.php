<?php
/**
 * Created by PhpStorm.
 * User: Warney
 * Date: 26/10/2016
 * Time: 07:47
 */

namespace classLivros;


class Livro {
    private $nome;
    private $editora;
    private $autor;
    private $paginas;
    private $tamanho;

    public function __construct($nome = false, $editora = false, $autor = false){
        if ($nome != false){
            $this->setNome($nome);
        }
        if ($editora != false){
            $this->setEditora($editora);
        }
        if ($autor != false){
            $this->setAutor($autor);
        }
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEditora($editora){
        $this->editora = $editora;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function setPaginas($paginas){
        $this->paginas = $paginas;
    }

    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEditora(){
        return $this->editora;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getPaginas(){
        return $this->paginas;
    }

    public function getTamanho(){
        return $this->tamanho;
    }

    public function AlphaBeto(){
        for($letra = "a"; $letra != "aa"; $letra++){
            if($letra == "Z"){
                echo $letra.".";
            }else{
                echo $letra.", ";
            }
        }
    }
}