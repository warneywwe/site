<?php

    // Banco de dados
    define('HOSTNAME', 'localhost'); // edita
    define('USERNAME', 'root'); // edita
    define('PASSWORD', ''); // edita
    define('DATABASE', 'showfansub'); // edita

    // URL's
    define('URL_BASE', 'http://'.'localhost'.'/'); // edita
    define('URL_REGISTER', URL_BASE.'registro');
    define('URL_DASHBOARD', URL_BASE.'inicio');
    define('URL_LOGIN', URL_BASE.'login');
    define('URL_IMG', URL_BASE.'img/');

    // Diretórios
    define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'].'/');
    define('DIR_SYSTEM', DIR_BASE.'system/');
	define('DIR_JS', DIR_BASE.'js/');
    define('DIR_CSS', DIR_BASE.'css/');
    define('DIR_IMG', DIR_BASE.'img/');
    define('DIR_INCLUDES', DIR_BASE.'includes/');

    // Arquivos
    define('FILE_CONFIG', DIR_SYSTEM.'config.php');
    define('FILE_HELPERS', DIR_SYSTEM.'helpers.php');
    define('FILE_DATBASE', DIR_SYSTEM.'db.php');
    define('FILE_MSG', DIR_SYSTEM.'msg.php');
    define('FILE_ACTIVE', DIR_BASE.'active.php');

    // Páginas de erro
    define('FILE_ERRO_DB', URL_BASE.'mysql_erro.php');
    define('FILE_ADBLOCK', URL_BASE.'adblock.php');
    define('FILE_NOT_FOUND', DIR_BASE.'404.php');

    // Arquivos diversos
    define('IMG_DEFAULT_USER', URL_BASE.'img/content/default.jpg');

    // Diversos
    define('SITE_NAME', 'Otaku Land');