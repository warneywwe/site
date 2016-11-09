<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/system/system.php');
AcessoPublico();
$msg = false;
if(!isset($_GET['register']) || $_GET['register'] == ''){
    Redirect(URL_BASE);
}else{
    $userKey    = strip_tags(trim($_GET['register']));
    $ativar     = ActiveUser($userKey);
    if(!$ativar){
        $msg = CorpoMSG(MsgSystem(20), 1);
    }else{
        $msg = CorpoMSG(MsgSystem(21), 2);
    }
}
include("includes/header.php");
?>
        <title>Ative sua conta - <?=SITE_NAME;?></title>
    </head>
    <body>
        <div id="top">
            <div class="content">
                <h1 class="head"><a href="<?=URL_DASHBOARD;?>"><?=SITE_NAME;?></a></h1>
                <span class="login"><a href="<?=URL_BASE;?>" title="Faça login">Faça login</a></span>
            </div>
        </div>
        <div class="active-msg">
            <?=$msg;?>
        </div>
        <?php
        include("includes/footer.php");
        ?>
    </body>
</html>
