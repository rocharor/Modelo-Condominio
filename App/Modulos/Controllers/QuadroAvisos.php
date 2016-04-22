<?php
    namespace Rocharor\Condominio\Modulos\Controllers;

    use Rocharor\Condominio\Sistema\Controller;

    class QuadroAvisos extends Controller{

        public function indexAction(){
            $variaveis = ['pagina_main' => 'quadro_avisos.html',
                          'navegacao' => 'Quadro de avisos',
                          'anuncio'=>true];

            $this->view('main',$variaveis);
        }
    }