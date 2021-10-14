<?php
    require_once "Conexao.php";
    require_once "Participantes.php";

    class ParticipantesDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from participantes order by idParticipantes");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Participantes");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($ida) {
            try {
                $query = $this->conexao->prepare("select * from participantes where idParticipantes like '$idp'");
                $query->execute();
                return $query->fetchAll(PDO::FETCH_CLASS, "Participantes")[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        return null;
        }

        public function inserir(Participantes $participantes){
            try{
                $query = $this->conexao->prepare("insert into participantes values (:idp, :nmp, :pjp)");
                $query->bindValue(":idp", $participantes->getIdParticipantes());
                $query->bindValue(":nmp", $participantes->getNomeParticipantes());
                $query->bindValue(":pjp", $participantes->getProjetoParticipantes());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Participantes $participantes){
            try{
                $query = $this->conexao->prepare("update participantes set nomeParticipantes = :nmp, projetoParticipantes = :pjp where idParticipantes = :idp");
                $query->bindValue(":idu", $participantes->getIdParticipantes());
                $query->bindValue(":nmu", $participantes->getNomeParticipantes());
                $query->bindValue(":tpu", $participantes->getProjetoParticipantes());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($idParticipantes){
            try{
                $query = $this->conexao->prepare("delete from participantes where idParticipantes = :idp");
                $query->bindValue(":idp", $idParticipantes);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>