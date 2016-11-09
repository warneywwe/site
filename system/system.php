<?php
Iniciar();

    // Validar registros
    function VarRegister(){
        if(!!GetPost('cadastrar')){
            $msg        = false;
            $nome       = GetPost('nome');
            $email      = GetPost('email');
            $usuario    = GetPost('usuario');
            $sexo       = GetPost('sexo');
            $nascimento = GetPost('nascimento');
            $senha      = GetPost('senha');
            $confirme   = GetPost('confirme');

            if(empty($nome)){
                $msg = CorpoMSG(MsgSystem(1), 4);
            }
            elseif(empty($email)){
                $msg = CorpoMSG(MsgSystem(2), 4);
            }
            elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $msg = CorpoMSG(MsgSystem(3), 4);
            }
            elseif(empty($usuario)){
                $msg = CorpoMSG(MsgSystem(4), 4);
            }
            elseif($sexo != 'f' && $sexo != 'm'){
                $msg = CorpoMSG(MsgSystem(5), 4);
            }
            elseif(empty($nascimento)){
                $msg = CorpoMSG(MsgSystem(6), 4);
            }
            elseif(empty($senha)){
                $msg = CorpoMSG(MsgSystem(7), 4);
            }
            elseif(empty($confirme)){
                $msg = CorpoMSG(MsgSystem(8), 4);
            }
            elseif(strlen($senha) < 8){
                $msg = CorpoMSG(MsgSystem(9), 4);
            }
            elseif($senha != $confirme){
                $msg = CorpoMSG(MsgSystem(10), 4);
            }
            else{
                if(!VarEmail($email)){
                    $msg = CorpoMSG(MsgSystem(11), 4);
                }
                elseif(!VarUsuario($usuario)){
                    $msg = CorpoMSG(MsgSystem(12), 4);
                }
                else{
                    $register = CadastrarUsuario($nome, $email, $usuario, $nascimento, $sexo, $senha);
                    if(!$register){
                        $msg = CorpoMSG(MsgSystem(13), 1);
                    }else{
                        Redirect(URL_REGISTER."?cadastroSucesso");
                    }
                }
            }
            if($msg != false){
                echo $msg;
            }
        }
    }

    // Iniciar sistema
    function Iniciar(){
        session_start();

        // Inclusão dos arquivos
        $msgErro = "<meta charset=\"UTF-8\"/>ERRO FATAL NO SISTEMA!<br/>Contacte o WebMaster através deste e-mail: <strong>contato@showsub.esy.es</strong>!";

            // Config.php
                $configFile = $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
                if(!file_exists($configFile)){
                    die($msgErro);
                }else{
                    require_once($configFile);
                }

            // helpers.php
                if(!file_exists(FILE_HELPERS)){
                    die($msgErro);
                }else{
                    require_once(FILE_HELPERS);
                }

            // db.php
                if(!file_exists(FILE_DATBASE)){
                    die($msgErro);
                }else{
                    require_once(FILE_DATBASE);
                }

            // msg.php
                if(!file_exists(FILE_MSG)){
                    die($msgErro);
                }else{
                    require_once(FILE_MSG);
                }
        UserLogado();
    }