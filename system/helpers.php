<?php

    /*=============================================================================*/
        /* PROTEÇÂO */

        // Controla acesso a páginas privadas
        function AcessoPrivado(){
            if(!IsLogged()){
                Redirect(URL_BASE);
            }
        }

        // Controla acesso a páginas publicas
        function AcessoPublico(){
            if(IsLogged()){
                Redirect(URL_DASHBOARD);
            }
        }

    /*=============================================================================*/
        /* CONFIGURAÇÔES DE SESSÃO */

        // Criar sessão
        function CriarSessao($chave = false){
            if(!$chave){
                return false;
            }else{
                return UserLog($chave);
            }
        }

        // Inserir ou recupera Sessão
        function UserLog($value = null){
            if($value === null){
                return $_SESSION['userLog_showSub'];
            }else{
                return $_SESSION['userLog_showSub'] = $value;
            }
        }

        // Verificar se usuario está logado
        function IsLogged(){
            if(!isset($_SESSION['userLog_showSub']) || empty($_SESSION['userLog_showSub'])){
                return false;
            }else{
                return true;
            }
        }

        // Destruir sessão
        function DestruirSessao(){
            if(isset($_REQUEST['sair'])){
                session_destroy();
                Redirect(URL_BASE);
            }
        }
    /*=============================================================================*/

    // Criptografar senha
    function CryptPassword($senha){
        return sha1($senha);
    }

    // Gerar chave de usuário
    function KeyGenerator(){
        return sha1(rand().time());
    }

    // Recuperar POST
    function GetPost($key = null){
        if($key === null){
            return $_POST;
        }else{
            return (isset($_POST[$key])) ? ClearString($_POST[$key]) : false;
        }
    }

    // Redirecionamento
    function Redirect($url){
        header("Location: ".$url);
        exit;
    }

    // Limpar strings
    function ClearString($str){
        return $str = trim(strip_tags($str));
    }

    // Printar foto de perfil do usuario
    function PrintarFoto(){
        $foto = RecuperarPerfil(RecuperarUser('id'), 'foto');
        if($foto == 0){
            return IMG_DEFAULT_USER;
        }else{
            return $foto;
        }
    }

    // Fazer login
    function LoginUser($usuario, $senha){
        $verificaUser   = UserVerify($usuario);
        $verificaSenha  = SenhaVerify($usuario, $senha);
        $vefiricaStatus = StatusVerify($usuario, $senha);
        if(!$verificaUser){
            echo CorpoMSG(MsgSystem(15), 4);
        }elseif(!$verificaSenha){
            echo CorpoMSG(MsgSystem(16), 4);
        }elseif(!$vefiricaStatus){
            echo CorpoMSG(MsgSystem(19), 4);
        }else{
            $userkey = GetUserkey($usuario, $senha);
            if(!$userkey){
                echo CorpoMSG(MsgSystem(17), 1);
            }else{
                $sessao = CriarSessao($userkey);
                if(!$sessao){
                    echo CorpoMSG(MsgSystem(17), 1);
                }else{
                    echo "Sucesso.";
                }
            }
        }
    }