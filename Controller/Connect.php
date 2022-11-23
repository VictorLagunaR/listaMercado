<?php

class Connect{

    private $con;

    function conexao(){
        include_once dirname(__FILE__) . '/Constants.php';
        $dsn = "mysql:dbname=bdLista;port=3307;host=localhost";
        $username = DB_USER;
        $password = DB_PASS;
        try{
            $db = new PDO($dsn,$username,$password);
            $db->exec("SET CHARACTER SET utf8");
            return $db;            
        }catch(PDOException $e){
            echo "Erro: " . $e;
        }
        
              
    }


}