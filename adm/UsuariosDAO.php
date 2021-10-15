<?php
    require_once "Conexao.php";
    require_once "Usuarios.php";

    class UsuariosDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from usuarios order by idUsuarios");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Usuarios");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($nomeUsuarios) {
            try {
                $query = $this->conexao->prepare("select * from usuarios where nomeUsuarios like '$nomeUsuarios'");
                $query->execute();
                return $query->fetchAll(PDO::FETCH_CLASS, "Usuarios");
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        return null;
        }

        public function alterarSenha($nomeUsuario, $senha, $novaSenha) {
            try {
                $query = $this->conexao->prepare("select * from usuarios where nomeUsuarios like '$nomeUsuario'");
                $query->execute();
                $usuario = $query->fetchAll(PDO::FETCH_CLASS, "Usuarios")[0];
                if ($usuario->getSenhaUsuarios() == $senha) {
                    $usuario->setSenhaUsuarios($novaSenha);
                }
                $this->alterar($usuario);
            }
            catch(PDOException $e) {
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
            return null;
        }

        public function alterarConta($nome, $novoNome, $senha) {
            try {
                $query = $this->conexao->prepare("select * from usuarios where nomeUsuarios like '$nome'");
                $query->execute();
                $usuario = $query->fetchAll(PDO::FETCH_CLASS, "Usuarios")[0];

                $usuario->setNomeUsuarios($novoNome);
                $usuario->setSenhaUsuarios($senha);
                $this->alterar($usuario);
            }
            catch(PDOException $e) {
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
            return null;
        }

        public function inserir($nome, $tipo, $senha) {
            try {
                $query = $this->conexao->prepare("insert into usuarios values (0, '$nome', '$tipo', '$senha')");
                return $query->execute();
            }
            catch(PDOException $e) {
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
            return null;
        }

        public function alterar(Usuarios $usuarios) {
            try {
                $query = $this->conexao->prepare("update Usuarios set nomeUsuarios = :nmu, tipoUsuarios = :tpu, senhaUsuarios = :snu where idUsuarios = :idu");
                $query->bindValue(":idu", $usuarios->getIdUsuarios());
                $query->bindValue(":nmu", $usuarios->getNomeUsuarios());
                $query->bindValue(":tpu", $usuarios->getTipoUsuarios());
                $query->bindValue(":snu", $usuarios->getSenhaUsuarios());
                return $query->execute();
            }
            catch(PDOException $e) {
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
            return null;
        }

        public function excluir($idUsuarios){
            try{
                $query = $this->conexao->prepare("delete from usuarios where idUsuarios = :idu");
                $query->bindValue(":idpj", $idUsuarios);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>