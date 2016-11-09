<?php
// Conexão com banco de dados
function MySQLStart(){
    try {
        $conexao = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $erro_db) {
        //header("Location: ".FILE_ERRO_DB);exit;
        echo $erro_db;
    }
    return $conexao;
}

    // Verifica se existe e-mail
    function VarEmail($email){
        $query = "SELECT email FROM membros WHERE email=:email";
        try {
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if ($count <= 0) {
                $resultado = true;
            } else {
                $resultado = false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }
        return $resultado;
    }

    // Verifica se existe usuário
    function VarUsuario($usuario){
        $query = "SELECT usuario FROM membros WHERE usuario=:usuario";
        try {
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if ($count <= 0) {
                $resultado = true;
            } else {
                $resultado = false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }
        return $resultado;
    }

    // Cadastrar usuário
    function CadastrarUsuario($nome, $email, $usuario, $nascimento, $sexo, $senha){
        $nome       = ucwords($nome);
        $senha      = CryptPassword($senha);
        $userKey    = KeyGenerator();
        $registro   = time();
        $nascimento = ClearString($nascimento);
        $sexo       = ClearString($sexo);
        $proseguir  = false;
        $seguir     = false;

        $query = "INSERT INTO membros (nome, email, usuario, senha, userchave, registro, nascimento, sexo) "
            ."VALUES (:nome, :email, :usuario, :senha, :userchave, :registro, :nasc, :sexo)";
        try {
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':nome', $nome, PDO::PARAM_STR);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->bindParam(':userchave', $userKey, PDO::PARAM_STR);
            $result->bindParam(':registro', $registro, PDO::PARAM_INT);
            $result->bindParam(':nasc', $nascimento, PDO::PARAM_STR);
            $result->bindParam(':sexo', $sexo, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if ($count > 0) {
                $proseguir = true;
            }else{
                echo $sucesso = $result->errorInfo();
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }

        if($proseguir = true){
            $buscarId = "SELECT id, userchave FROM membros WHERE nome=:nome";
            try{
                $call = MySQLStart()->prepare($buscarId);
                $call->bindParam(':nome', $nome, PDO::PARAM_STR);
                $call->execute();
                $count_id = $call->rowCount();
                if($count_id > 0){
                    $show           = $call->fetch(PDO::FETCH_OBJ); // id e chave de usuário
                    $assunto        = "Ative sua conta!";
                    $mensagem       = "Se você recebeu este e-mail por engano, por favor ignore-o.
                        Este e-mail foi enviado devido a solicitação de cadastro de nova conta no site: ".SITE_NAME.".
                        Ative sua conta clicando no link no link abaixo.
                        ".URL_BASE."active?register=".$show->userchave
                    ;
                    $headers        = "nao-responda@otakuland.tk";
                    mail($email, $assunto, $mensagem, $headers);
                    $_id = $show->id;
                    $seguir = true;
                }
                else{
                    $sucesso = false;
                }
            }catch (PDOException $erro_db){
                echo $erro_db;
            }
        }
        if($seguir = true){
            $guardaChave = "INSERT INTO perfil (id) VALUES (:id)";
            try{
                $close = MySQLStart()->prepare($guardaChave);
                $close->bindParam(':id', $_id, PDO::PARAM_INT);
                $close->execute();
                $contar = $close->rowCount();
                if($contar > 0){
                    $sucesso = true;
                }
            }catch (PDOException $erro_db){
                echo $erro_db;
            }
        }
        return $sucesso;
    }

    // Ativar usuário
    function ActiveUser($userKey){
        $query = "SELECT userchave FROM membros WHERE userchave=:chave AND status='0'";
        try{
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':chave', $userKey, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if($count > 0){
                $permissao = true;
            }else{
                $permissao = false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }

        if($permissao = true){
            $num = 1;
            $queryNew = "UPDATE membros SET status=:estado WHERE userchave=:chave AND status='0'";
            try{
                $resultNew = MySQLStart()->prepare($queryNew);
                $resultNew->bindParam(':estado', $num, PDO::PARAM_INT);
                $resultNew->bindParam(':chave', $userKey, PDO::PARAM_STR);
                $resultNew->execute();
                $contar = $resultNew->rowCount();
                if($contar > 0){
                    $sucesso = true;
                }else{
                    $sucesso = false;
                }
            }catch (PDOException $erro_db){
                echo $erro_db;
            }
        }

        if($permissao = false){
            return false;
        }elseif($permissao = true){
            if($sucesso = true){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    // Verifica usuário para login
    function UserVerify($usuario){
        $username = ClearString($usuario);
        $query = "SELECT email FROM membros WHERE usuario=:usuario";
        try{
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':usuario', $username, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if($count > 0){
                $sucesso = true;
            }else{
                $sucesso = false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }
        return $sucesso;
    }

    // Verificar senha de usuário para login
    function SenhaVerify($usuario, $senha){
        $usuario = ClearString($usuario);
        $senha = CryptPassword($senha);
        $query = "SELECT senha FROM membros WHERE usuario=:usuario AND senha=:senha";
        try{
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if($count > 0){
                $sucesso = true;
            }else{
                $sucesso = false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }
        return $sucesso;
    }

    // Recuperar chave de usuário para sessão
    function GetUserkey($usuario, $senha){
        $usuario    = ClearString($usuario);
        $senha      = CryptPassword($senha);
        $query = "SELECT userchave FROM membros WHERE usuario=:username AND senha=:senha AND status='1'";
        try{
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':username', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            $show = $result->fetch(PDO::FETCH_OBJ);
            if($count > 0){
                $sucesso = $show->userchave;
            }else{
                $sucesso = false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }
        return $sucesso;
    }

    // Verificar status do usuario para login
    function StatusVerify($usuario, $senha){
        $usuario    = ClearString($usuario);
        $senha      = CryptPassword($senha);
        $query      = "SELECT userchave FROM membros WHERE usuario=:username AND senha=:senha AND status='1'";
        try{
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':username', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if($count > 0){
                $sucesso = true;
            }else{
                $sucesso = false;
            }
        }catch (PDOException $erro_bd){
            echo $erro_bd;
        }
        return $sucesso;
    }

    // Recuperar dados de usuário logado
    function RecuperarUser($campo = null){
        $sessao = $_SESSION['userLog_showSub'];
        $query = "SELECT * FROM membros WHERE userchave=:chave";
        try{
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':chave', $sessao, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if($count > 0){
                $show = $result->fetchAll();
                if($campo == null){
                    return $result->fetch(PDO::FETCH_OBJ);
                }else{
                    foreach($show as $loop){
                        return $loop[$campo];
                    }
                }
            }else{
                return false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }
    }

    // Recuperar perfil do usuário
    function RecuperarPerfil($id, $campo){
        $query  = "SELECT * FROM perfil WHERE id=:id";
        try{
            $result = MySQLStart()->prepare($query);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
            $count = $result->rowCount();
            if($count > 0){
                $loop = $result->fetchAll();
                foreach($loop as $show){
                    return $show[$campo];
                }
            }else{
                return false;
            }
        }catch (PDOException $erro_db){
            echo $erro_db;
        }
    }

    // Verificar se usuario contina logado
    function UserLogado(){
        if(!isset($_SESSION['userLog_showSub']) || empty($_SESSION['userLog_showSub'])){
            return false;
        }else{
            $chave = $_SESSION['userLog_showSub'];
            $query = "SELECT userchave FROM membros WHERE userchave=:chave AND status='1'";
            try {
                $result = MySQLStart()->prepare($query);
                $result->bindParam(':chave', $chave, PDO::PARAM_STR);
                $result->execute();
                $count = $result->rowCount();
                if($count <= 0){
                    session_destroy();
                    Redirect(URL_BASE);
                }else{
                    return true;
                }
            } catch (PDOException $erro_db) {
                echo $erro_db;
            }
        }
    }