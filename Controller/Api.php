<?php

class Api{
    private $con;

    function __construct(){
        require_once 'Connect.php';
        $connect = new Connect();
        $this-> con = $connect -> conexao();
    }

    function adicionarLista($nomeLista, $idUsuario){
        $stmt = $this->con -> prepare("INSERT INTO lista (idLista, idusuario,nomeLista) values (:idlista, :ID, :nomeLista)");
        $stmt -> bindValue(":idlista", 0);
        $stmt -> bindValue(":ID", $idUsuario);
        $stmt -> bindValue(":nomeLista", $nomeLista);
        if($stmt->execute()){
            header("Location: ../View/adicionarProdutos.php");
        }
        
    }

    function puxarListas($idUsuario){
        $stmt = $this -> con -> prepare("SELECT idlista, nomeLista from lista where idusuario = :ID order by  idlista DESC");
        $stmt -> bindValue(":ID", $idUsuario);
        $stmt->execute();
        
        if($stmt->rowCount()){
            $listas = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
            $idlistas = array();
            $cont = 0;
            do{

                echo 
                '<li class="listas__lista" >
                    <button class = "lista__btn" data-id = ' . $listas[0] . '>
                        <h3 class="lista__nome">' . $listas[1] . ' </h3>
                    </button>
                </li>';
                
            }while($listas = $stmt -> fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
        }
    }

}   

$api = new Api();

