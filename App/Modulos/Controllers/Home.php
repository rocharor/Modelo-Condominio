<?php
    namespace Rocharor\Condominio\Modulos\Controllers;

    use Rocharor\Condominio\Sistema\Controller;

    class Home extends Controller{

        public function indexAction(){

            $variaveis = ['pagina_main' => 'index.html',
                           'anuncio'=>true];

            $this->view('main',$variaveis);
        }
    }
