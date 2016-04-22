<?php

    use Rocharor\Condominio\Sistema\Conexao;

    if($_SERVER['HTTP_HOST'] == 'localhost'){
        $caminho = '/Condominio/Public';
    }else{
        $caminho = '';
    }

    define('INC_ROOT',str_replace('\\','/',dirname(__DIR__)));
    define('CONTROLLERS',  INC_ROOT.'/App/Modulos/Controllers/');
    define('VIEWS', INC_ROOT.'/App/Modulos/Views/');
    define('MODELS',  INC_ROOT.'/App/Modulos/Models/');
    define('_CAMINHO_',$caminho);
    define('_CONFIG_',INC_ROOT.'/App/Sistema/config/');

    $conn = new Conexao(_CONFIG_.'mysql.ini');
    $conn = $conn ->open();

    $smarty = new Smarty;
    $smarty->setTemplateDir(VIEWS);
    $smarty->setCompileDir(INC_ROOT . '/vendor/smarty/smarty/libs/templates_c/');
    $smarty->setConfigDir(INC_ROOT . '/vendor/smarty/smarty/libs/config/');
    $smarty->setCacheDir(INC_ROOT  . '/vendor/smarty/smarty/libs/cache/');

    /**
     * Display de erros
     * 0 => não mostra
     * 1 => mostra
     */
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

