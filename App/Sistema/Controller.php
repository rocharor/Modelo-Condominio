<?php
    namespace Rocharor\Condominio\Sistema;

    class Controller
    {
        public function __construct()
        {
            global $start;
            $this->parametros = $start->getParametros();
        }

        public function view($arquivo = null, $variaveis = array())
        {
            global $start, $smarty;

            if (is_null($arquivo)) {
                $controller = strtolower(str_replace('Controller', '', $start->getController()));
                $action = strtolower(str_replace('Action', '', $start->getAction()));
                $view = VIEWS . $controller . '/' . $action . '.html';
            } else {
                $view = VIEWS . $arquivo . '.html';
            }

            if (file_exists($view)) {
                $smarty->assign('link',$start->getLink());
                foreach($variaveis as $nomeVar=>$valorVar){
                    $smarty->assign($nomeVar,$valorVar);
                }

                $smarty->display('main.html');
            } else {
                $start->erro(404,'Controller/View');
            }
        }
    }
