<?php
    class Conexao{

        public static $conexao;

        public static function conecta(){

            if(!isset(self::$conexao)){

                try{
                    self::$conexao = new PDO("mysql:host=localhost; dbname=Pesquisa", "root", "root");
                }

                catch(PDOException $e){
                    echo "Erro de conexão: ". $e->getMessage();
                    die();
                }

            }

            return self::$conexao;
            
        }

    }
?>