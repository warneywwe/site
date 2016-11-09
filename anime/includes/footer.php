
        <footer id="rodape">
            <div class="content">
                <div class="esquerda">
                    <div class="title">
                        <h1><?=SITE_NAME;?></h1>
                    </div>
                    <div class="footer-img"></div>
                </div>
                <div class="direita">
                    <div class="fb-page" data-href="https://www.facebook.com/Otaku.Land.Official/" data-width="600" data-height="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Otaku.Land.Official/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/Otaku.Land.Official/">
                                <?=SITE_NAME;?>
                            </a>
                        </blockquote>
                    </div>
                    <div class="content-rights">
                        <a href="#">Termos de uso</a> — <a href="#">Política de Privacidade</a>
                    </div>
                </div>
            </div>
            <div class="centro-footer"></div>
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
<div class="footer-links">
                <h2>Equipe: </h2>
                <a href="#">Karlos Warney</a>
                <a href="#">Luan Moshizuki</a>
                <a href="#">Carlos Sodré</a>
                <a href="#">Gildênia Chaves</a>
                <a href="#">Luana Chaves</a>
            </div>
            <div class="footer-links type2">
                <h2>Parceiros: </h2>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
            </div>
            <div class="copyright">
                <div class="content">
                    Copyright <span style="font-family: Arial, sans-serif;">&copy;</span> <?=$data;?> <?=SITE_NAME;?> — A rede social dos otakus!
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="../scripts/setup.js"></script>
        <script type="text/javascript" src="../scripts/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../scripts/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="../flex-slider/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="../scripts/functions.dashboard.jquery.js"></script>