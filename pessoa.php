<?php

Class Pessoa{

    private $pdo;

        public function __construct($dbname, $host, $user, $pass){
            
        try{
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host".$host, $user,$pass);

        }catch(PDOException $e){
            echo "Erro com banco de dados: ".$e->getMessage();
                exit();
                
        }catch(Exception $e){
            echo "Opppps temos um erro!".$e->getMessage();
                exit();
        }
    }
    //funcao para o canto direito da tela
    public function buscarDados(){
        $res = [];
        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
        
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

}