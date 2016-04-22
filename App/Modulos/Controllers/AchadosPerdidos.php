<?php
    namespace Rocharor\Condominio\Modulos\Controllers;

    use Rocharor\Condominio\Sistema\Controller;

    class AchadosPerdidos extends Controller{

        public function indexAction(){
            $variaveis = ['pagina_main' => 'achados_perdidos.html',
                          'navegacao' => 'Achados e Perdidos',
                          'anuncio'=>true];

            $this->view('main',$variaveis);
        }
    }