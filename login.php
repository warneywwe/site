<?php
require_once('system/system.php');
AcessoPublico();
$msg = false;
include('includes/header.php');
?>
    <title>Login — <?=SITE_NAME;?></title>
</head>
<body>
<div id="top">
    <div class="content">
        <h1 class="head"><a href="<?=URL_DASHBOARD;?>"><?=SITE_NAME;?></a></h1>
        <span class="login">Não possui uma conta? Então <a href="<?=URL_REGISTER;?>" title="Cadastre-se">cadastre-se</a></span>
    </div>
</div>
<div class="msg">
</div>
<div id="interface" class="login-content">
    <h1 class="titulo"><?=SITE_NAME;?></h1>
    <p>Entre com seus dados.</p>
    <hr/>
    <form action="" id="form_login" name="login" method="post">
        <label for="usuario">
            Usuário:
        </label><br/>
        <input id="usuario" name="usuario" type="text"/><p></p>

        <label for="senha">
            Senha:
        </label><br/>
        <input id="senha" name="senha" type="password"/><p></p>
        <hr/>
        <input id="login" class="btn btn-submit" type="submit" name="logar" value="Fazer Login" autofocus/>
    </form>
</div>
<?php
include("includes/footer.php");
?>
</body>
</html>