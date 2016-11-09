<?php
/**
 * Created by PhpStorm.
 * User: Warney
 * Date: 27/10/2016
 * Time: 16:37
 */

namespace classAluno;


class Aluno{
    public $nome;
    private $cpf;
    protected $numeroMatricula;
    public $responsabilidade;

    public function __construct($nome = false,
                                $cpf = false,
                                $numeroMatricula = false,
                                $responsabilidade = null){
        if($nome != false){
            $this->setNome($nome);
        }

        if($cpf != false){
            $this->setCpf($cpf);
        }

        if($numeroMatricula != false){
            $this->setNumeroMatricula($numeroMatricula);
        }

        if($responsabilidade != null){
            $this->setResponsabilidade($responsabilidade);
        }
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getNumeroMatricula(){
        return $this->numeroMatricula;
    }

    public function setNumeroMatricula($numeroMatricula){
        $this->numeroMatricula = $numeroMatricula;
    }

    public function getResponsabilidade(){
        return $this->responsabilidade;
    }

    public function setResponsabilidade($responsabilidade){
        $this->responsabilidade = $responsabilidade;
    }
}