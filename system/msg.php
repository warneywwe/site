<?php

function MsgSystem($indece = false){
    $mensagem = array(
        1 => "Informe seu nome para continuar.",
        2 => "Informe seu e-mail para continuar.",
        3 => "Informe um e-mail válido.",
        4 => "Informe seu nome de usuário para continuar.",
        5 => "O que é que você tá olhando aí? Se acha que vai conseguir hackear meu sistema, fique a vontade para tentar! ;)",
        6 => "Informe sua data de nascimento para proseguir.",
        7 => "Informe uma senha para continuar.",
        8 => "Confirme sua senha para continuar.",
        9 => "A senha precisa ter no mínimo 8 dígitos para ser válida.",
        10 => "As senhas não coecidem, tente novamente.",
        11 => "Este e-mail já está em uso, informe outro!",
        12 => "Este nome de usuário ja está em uso, informe outro!",
        13 => "Desculpe, não foi possível criar sua conta no momento, tente mais tarde!",
        14 => "Você foi cadastrado com sucesso, cheque seu e-mail e click no link enviado para ativar sua conta.",
        15 => "O nome de usuário fornecido é inválido.",
        16 => "A senha fornecida é inválida.",
        17 => "Não foi possível fazer login, tente novamente mais tarde.",
        18 => "Você foi cadastrado com sucesso, cheque sua caixa de mensagem e spam e click no link fornecido para ativar sua conta!",
        19 => "Você não pode logar na sua conta porque ela ainda não está ativa.",
        20 => "Erro ao ativar conta, verifique se o link informado é válido<br/>
                ou se você não estrapolou o prazo de ativação, contacte o WebMaster para<br/>
                 mais informaçãoes: <b>contato@showsub.esy.es</b>",
        21 => "Conta ativada com sucesso! <a href=".URL_BASE.">Click aqui</a> para fazer login em sua nova conta."
    );
    if(!$indece){
        return false;
    }
    else{
        return $mensagem[$indece];
    }
}

function CorpoMSG($msg, $tipo = false){
    if(!$tipo){
        return false;
    }else{
        switch($tipo){
            case 1:
                return "<div class=\"alert alert-danger\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>".$msg."</strong>
                  </div>";
                break;
            case 2:
                return "<div class=\"alert alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>".$msg."</strong>
                  </div>";
                break;
            case 3:
                return "<div class=\"alert alert-info\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>".$msg."</strong>
                  </div>";
                break;
            case 4:
                return "<div class=\"alert alert-adver\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>".$msg."</strong>
                  </div>";
                break;
        }
    }
}