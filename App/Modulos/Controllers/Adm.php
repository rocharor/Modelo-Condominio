<?php
    namespace Rocharor\Condominio\Modulos\Controllers;

    use Rocharor\Condominio\Modulos\Models\AvisoModel;
    use Rocharor\Condominio\Sistema\Controller;
    use Rocharor\Condominio\Sistema\Sessao;
    use Rocharor\Condominio\Sistema\Start;

    class Adm extends Controller{

        public function loginAction(){

            if(Sessao::pegaSessao('login') == 1){
                header("location: "._CAMINHO_."/adm/");
            }else if(isset($_POST['user_login']) || isset($_POST['senha_login'])){
                $user = $_POST['user_login'];
                $pass = $_POST['senha_login'];

                if($user == 'admin' && $pass == 'admin'){
                    Sessao::setaSessao(array('login'=>1));
                    header("location: "._CAMINHO_."/adm/");
                }else{
                    $variaveis = ['pagina_main' => 'adm/login.html',
                              'navegacao' => '',
                              'msg' => 'Usuário ou senha invalidos',
                              'anuncio'=>false];
                }
            }else{
                $variaveis = ['pagina_main' => 'adm/login.html',
                              'navegacao' => '',
                              'msg' => '',
                              'anuncio'=>false];
            }

            $this->view('main',$variaveis);
        }

        public function logoffAction(){

            Sessao::setaSessao(array('login'=>0));
            header("location: "._CAMINHO_.'/adm/login');

        }

        public function indexAction(){
            global $start;

            if(Sessao::pegaSessao('login')){
                $variaveis = ['pagina_main' => 'adm/adm.html',
                              'navegacao' => '',
                              'msg' => '',
                              'anuncio'=>false];
                $this->view('main',$variaveis);
                die();
            }else{
                $start->erro('401');
            }
        }

        public function avisoAction(){

            $aviso = new AvisoModel();

            if(isset($_POST['act'])){

                if($_POST['act'] == 'setAviso'){
                    echo '<pre>';
                    var_dump($_POST);
                    echo '</pre>';
                    exit();
                    $titulo = $_POST['aviso_titulo'];
                    $data = $_POST['aviso_data'];
                    $descricao = $_POST['aviso_descricao'];

                    $retorno = $aviso->setAviso($titulo,$data,$descricao);

                    echo json_encode($retorno);
                    die();
                }

                if($_POST['act'] == 'getAviso'){

                    $aviso_id = $_POST['aviso_id'];
                    $dados = $aviso->getAvisos($aviso_id);

                    echo json_encode($dados);
                    die();
                }

                if($_POST['act'] == 'excluirAviso'){
                    $aviso_id = $_POST['aviso_id'];
                    $ret = $aviso->deleteAviso($aviso_id);

                    echo json_encode($ret);
                    die();
                }
            }

            $avisos = $aviso->getAvisos();

            $variaveis = ['pagina_main' => 'adm/admAviso.html',
                          'avisos' => $avisos,
                          'navegacao' => "<a href='"._CAMINHO_."/adm/'>Adm</a> / Cadastro de avisos",
                          'anuncio'=>false];

            $this->view('main',$variaveis);

        }

    }
