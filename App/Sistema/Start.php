<?php
    namespace Rocharor\Condominio\Sistema;

    class Start{
        private $_url;
        private $_explode;
        private $_controller;
        private $_action;
        private $_parametros;
        private  $_link;

        public function __construct(){
            $this->setUrl();
            $this->setExplode();
            $this->setController();
            $this->setAction();
            $this->setParametros();
            $this->setLink();

        }

        // ===============================================
        // Metodos para setar os parametros nos atributos
        // ===============================================
        private function setUrl(){
            $this->_url = isset($_GET['url']) ? trim($_GET['url']) : '';
        }

        private function setExplode(){
            if ($this->_url != '') {
                $this->_explode = explode('/', $this->_url);
            } else {
                $this->_explode = array();
            }
        }

        private function setController(){
            if(isset($this->_explode[0])){
                //$this->_controller = ucwords($this->_explode[0]) . 'Controller';
                $this->_controller = ucwords($this->_explode[0]);
            }else{
                //$this->_controller = ucwords('home') . 'Controller';
                $this->_controller = ucwords('Home');
            }
        }

        private function setAction(){
            if (isset($this->_explode[1]) && !empty($this->_explode[1])) {
                $this->_action = strtolower($this->_explode[1]) . 'Action';
            } else {
                $this->_action = strtolower('index') . 'Action';
            }
        }

        private function setParametros(){
            unset($this->_explode[0]);
            unset($this->_explode[1]);

            $i = 0;
            $nome = null;
            foreach ($this->_explode as $v) {
                if ($i % 2 == 0) {
                    $nome = $v;
                } else {
                    $this->_parametros[$nome] = $v;
                }
                $i++;
            }
        }

        private function setLink(){
            if(substr_count($this->_url,'/') == 0)
                $link = '';
            elseif(substr_count($this->_url,'/') == 1)
                $link = '../';
            elseif(substr_count($this->_url,'/') == 2)
                $link = '../../';

            $this->_link = $link;
        }


        // ===============================================
        // Metodos para pegar os atributos privados;
        // ===============================================
        public function getController(){
            return $this->_controller;
        }

        public function getAction(){
            return $this->_action;
        }

        public function getParametros(){
            return $this->_parametros;
        }

        public function getLink(){
            return $this->_link;
        }


        // ===============================================
        // Metodo para direcionar para pagina de erro;
        // ===============================================
        public function erro($erro = 404) {
            global $smarty;

            $view = new Controller();

            if ($erro == 404) {
                $variaveis = ['pagina_main' => '404.html',
                              'anuncio'=>false];
                $view->view('main',$variaveis);
                die();
            }else if($erro == 401){
                $variaveis = ['pagina_main' => '401.html',
                              'anuncio'=>false];
                $view->view('main',$variaveis);
                die();
            }else{
                die('Erro geral');
            }

        }


        // ===========================================================================
        // Metodo que faz trambite para direcionar para os controller e actions certos
        // ===========================================================================
        public function iniciar(){

            Sessao::abrirSessao();

            $controller = CONTROLLERS . $this->_controller . '.php';
            if (file_exists($controller)) {
                $this->_controller = 'Rocharor\\Condominio\\Modulos\\Controllers\\' . $this->_controller;
                $app = new $this->_controller();

                if (method_exists($app, $this->_action)) {
                    $action = $this->_action;
                    $app->$action();
                } else {
                    $this->erro(404);
                }
            } else {
                $this->erro(404);
            }
        }

    }
