/**
 * Created by Warney on 16/09/2016.
 */
$(document).ready(function(){
    var dropHead            = $('#drop-head');
    var dropBody            = $('#drop-body');
    var interfaceG          = $('#interface');
    var seta                = $('.btn-seta');
    var conviteHead         = $('#convites-head');
    var conviteClasse       = $('#convites');
    var conviteFechar       = $('#convites-close');
    var hiperFundo          = $('#hiper-fundo');
    var btn_close           = conviteFechar.find('.btn-close');
    var nav404              = $('#nav-404');
    var drop404head         = nav404.find('#head');
    var drop404             = nav404.find('.drop-404');
    var dropSeta404         = nav404.find('#drop-seta-404');
    var btnFavoritosMore    = $('.btn-anime-more');
    var favoritosClass      = $('#detalhes-favoritos');
    var favoritosFechar     = $('#detalhes-close');
    var btn_closeFavoritos  = favoritosFechar.find('.btn-close');
    var form_login          = $('#form_login');
    var login_msg           = $('.msg');
    var login_btn           = $('#login');

    form_login.on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:            'system/system.control.php',
            type:           'post',
            data:           form_login.serialize(),
            success:        function(data){
                if(data == 'Sucesso.'){
                    location.href='inicio';
                }else{
                    login_msg.html(data);
                }
            }
        });
    });

    btnFavoritosMore.on('click', function(){
        var idAnimeFavorito = $(this).attr('data-anime-detalhe');
        $.ajax({
                     url: 'system/system.control.php',
                    type: 'post',
                    data: idAnimeFavorito,
              beforeSend: function(){
                  hiperFundo.fadeIn(300);
                  favoritosClass.fadeIn(300);
                  $(document).on('keyup', function(event){
                      if(event.keyCode == 27){
                          favoritosClass.fadeOut(250);
                          hiperFundo.fadeOut(200);
                      }
                  });
              }
        });
    });

    dropHead.on('click', function(){
        dropBody.toggle(300);
    });

    interfaceG.on('click', function(){
        dropBody.fadeOut();
    });

    conviteHead.on('click', function(){
        hiperFundo.fadeIn(100);
        conviteClasse.fadeIn(150);
        $(document).on('keyup', function(event){
            if(event.keyCode == 27){
                conviteClasse.fadeOut(250);
                hiperFundo.fadeOut(200);
            }
        });
    });

    btn_close.on('click', function(){
        conviteClasse.fadeOut(250);
        hiperFundo.fadeOut(200);
    });

    hiperFundo.on('click', function(){
        conviteClasse.fadeOut(250);
        favoritosClass.fadeOut(250);
        hiperFundo.fadeOut(200);
    });

    drop404head.on('click', function(){
        drop404.toggle(300);
    });

    drop404head.on('mouseover', function(){
        dropSeta404.css(
            'border-left-color', '#ff4a3d'
        );
    });

    drop404head.on('mouseout', function(){
        dropSeta404.css(
            'border-left-color', '#FFFFFF'
        );
    });

    btn_closeFavoritos.on('click', function(){
        favoritosClass.fadeOut(250);
        hiperFundo.fadeOut(200);
    });
});