<?php
    namespace Rocharor\Condominio\Sistema;

    class Sessao {

        public static function abrirSessao($nome='condominio') {
            session_name($nome);
            session_start();

            //self::setaSessao(array('logado'=>0));

            return true;
        }

        /**
        * Recebe um array com as opções a serem setadas na sessão
        *
        */
        public static function setaSessao(){
            $parametros = func_get_args();

            foreach($parametros[0] as $key=>$value){

                $_SESSION['condominio'][$key] = $value;
            }

            return true;

        }

        public static function pegaSessao(){
            $parametros = func_get_args();
            $dados = '';

            if(isset($_SESSION['condominio'])){
                foreach($parametros as $value){
                    $dados = $_SESSION['condominio'][$value];
                }
            }
            if(count($dados) > 0 )
                return $dados;
            else
                return false;
        }

        public static function excluiSessao($sessao){
            unset($_SESSION[$sessao]);
            self::setaSessao(['logado'=>0,'user_id'=>0]);
            return true;
        }

    }
