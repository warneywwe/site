<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/system/system.php');
AcessoPublico();
include('includes/header.php');
echo $_SERVER['HTTP_USER_AGENT'];
?>
    <title>Cadastre-se — <?=SITE_NAME;?></title>
</head>
<body>
<div id="top">
    <div class="content">
        <h1 class="head"><a href="<?=URL_DASHBOARD;?>"><?=SITE_NAME;?></a></h1>
        <span class="login">Já possui uma conta? Então faça <a href="<?=URL_BASE;?>" title="Login">login</a></span>
    </div>
</div>
<div class="msg">
    <?php
    VarRegister(); MsgSystem();
    if(isset($_REQUEST['cadastroSucesso'])){
        echo CorpoMSG(MsgSystem(18), 2);
    }
    ?>
</div>
<div id="interface" class="register-content">
<h1 class="titulo"><?=SITE_NAME;?></h1>
<p>Informe seus dados.</p>
<hr/>
<form action="<?=URL_REGISTER;?>" method="post">
    <label for="nome">
        Nome:
    </label>
    <input id="nome" name="nome" type="text" value="<?=GetPost('nome');?>"/>

    <label for="email">
        E-mail:
    </label>
    <input id="email" name="email" type="email" value="<?=GetPost('email');?>"/>

    <label for="usuario">
        Usuário:
    </label>
    <input id="usuario" name="usuario" type="text" value="<?=GetPost('usuario');?>"/>

    <span>Sexo:</span><br/>
    <?php
    if(isset($_POST['sexo'])){
        if($_POST['sexo'] == 'm'){
            $masc = "checked";
            $femi = false;
        }elseif($_POST['sexo'] == 'f'){
            $masc = false;
            $femi = "checked";
        }else{
            $masc = "checked";
            $femi = false;
        }
    }else{
        $masc = "checked";
        $femi = false;
    }
    ?>
    <label for="masc">
        <input id="masc" name="sexo" type="radio" value="m" <?=$masc;?>/>
        Masculino
    </label>
    <label for="fem">
        <input id="fem" name="sexo" type="radio" value="f" <?=$femi;?>/>
        Feminino
    </label><br/>

    <label for="nascimento">
        Nascimento:
    </label>
    <input id="nascimento" name="nascimento" type="date" value="<?=GetPost('nascimento');?>"/>

    <label for="senha">
        Senha:
    </label>
    <input id="senha" name="senha" type="password"/>

    <label for="confirme">
        Confirme sua senha:
    </label>
    <input id="confirme" name="confirme" type="password"/>
    <input class="btn btn-submit" type="submit" name="cadastrar" value="Cadastrar"/>
</form>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>