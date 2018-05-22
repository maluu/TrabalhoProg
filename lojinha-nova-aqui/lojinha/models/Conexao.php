<?php


class Conexao
{
    const HOST = "localhost";
    const DBNAME = "felipe";
    const USUARIO = "felipe";
    const SENHA = "felipe";

        public static  $conexao = null;

        public static function getConexao(){
            try{
                if(self::$conexao = null){
                    self::$conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME, self::USUARIO, self::SENHA);
                    self::$conexao->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRMODE_EXCEPTION);
                }
                return self::$conexao;

            }catch (PDOException $e){
                die("falha na conexao:".$e->getMessage());
            }
                return $conexao;
        }

}