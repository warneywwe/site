<?php
date_default_timezone_set("America/Sao_Paulo");
$dataInicial    = "2016";
$novaData       = date('Y');
if($novaData > $dataInicial){
    $data = "2016 - ".$novaData;
}else{
    $data = "2016";
}
?>
<div id="down">
    <span class="footer">
        Copyright &copy; <?=$data;?> - <?=SITE_NAME;?> - Curta nossa página no <a href="https://www.facebook.com/show.sub" target="_blank">Facebook</a>
    </span>
</div>