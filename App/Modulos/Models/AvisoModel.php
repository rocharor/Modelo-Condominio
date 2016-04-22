<?php
    namespace Rocharor\Condominio\Modulos\Models;

    use Rocharor\Condominio\Sistema\Model;
    use Rocharor\Condominio\Sistema\Conexao;

    class AvisoModel extends Model{

	    public function setAviso($titulo,$data,$descricao){
            global $conn;

            $titulo = trim($titulo);
            $data = date("Y-m-d H:i:s",strtotime(str_replace("/","-",$data)));
            $descricao = trim(strip_tags($descricao));

            $query = "INSERT INTO avisos (titulo,data_evento,descricao,data_cadastro) VALUES(:titulo,:data_evento,:descricao,NOW())";
            $param = array( ":titulo"=>$titulo,
                            ":data_evento"=>$data,
                            ":descricao"=>$descricao);
            $rs = $conn->prepare($query);

            if($rs->execute($param)){
                return true;
            }else{
                return false;
            }



	    }

        public function getAvisos($aviso_id=false){
            global $conn;

            $query = "SELECT * FROM avisos ";
            if($aviso_id){
                $query .= " WHERE aviso_id = {$aviso_id} ";
            }
            $query .= " ORDER BY aviso_id DESC";

            $rs = $conn->query($query);
            $avisos = [];
            while($row = $rs->fetch(\PDO::FETCH_ASSOC)){
                $avisos[] = $row;
            }
            return $avisos;
        }

        public function deleteAviso($aviso_id){
            global $conn;

            $query = "DELETE FROM avisos WHERE aviso_id = {$aviso_id}";

            $ret = $conn->exec($query);

            return $ret;
        }
    }
