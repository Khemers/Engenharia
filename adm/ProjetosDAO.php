<?php
    require_once "Conexao.php";
    require_once "Projetos.php";

    class ProjetosDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from projetos order by idProjetos");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Projetos");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($ida) {
            try {
                $query = $this->conexao->prepare("select * from projetos where idProjetos like '$idpj'");
                $query->execute();
                return $query->fetchAll(PDO::FETCH_CLASS, "Projetos")[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        return null;
        }

        public function inserir($professor, $nome, $status, $tema, $area) {
            try {
                $query = $this->conexao->prepare("insert into projetos values (0, '$professor', '$nome', '$status', '$tema', '$area', '.')");
                return $query->execute();
            }
            catch(PDOException $e) {
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
            return null;
        }

        public function alterar(Projetos $projetos){
            try{
                $query = $this->conexao->prepare("update projetos set professorProjetos = :prpj, nomeProjetos = :nmpj, statusProjetos = :stpj, temaProjetos = :tmpj, areaconhecimentoProjeto = :acpj, participantesProjetos = : ptpj where idProjetos = :idpj");
                $query->bindValue(":idpj", $projetos->getIdProjetos());
                $query->bindValue(":prpj", $projetos->getProfessorProjetos());
                $query->bindValue(":nmpj", $projetos->getNomeProjetos());
                $query->bindValue(":stpj", $projetos->getStatusProjetos());
                $query->bindValue(":tmpj", $projetos->getTemaProjetos());
                $query->bindValue(":acpj", $projetos->getAreaconhecimentoProjeto());
                $query->bindValue(":ptpj", $projetos->getParticipantesProjetos());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($idProjetos){
            try{
                $query = $this->conexao->prepare("delete from projetos where idProjetos = :idpj");
                $query->bindValue(":idpj", $idProjetos);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>