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
            //puxar ID da Lista
            $stmt = $this -> con -> prepare("SELECT idLista FROM lista WHERE nomeLista = :nomeLista AND IDusuario = :usuario");
            $stmt -> bindValue(':nomeLista', $nomeLista);
            $stmt -> bindValue(':usuario', $idUsuario);
            $stmt -> execute();
            if($stmt -> rowCount()){
                $idlista = $stmt -> fetch();
                $_SESSION['IDlista'] = $idlista[0];
                header("Location: ../View/adicionarProdutos.php");
                exit;
            }
            
        }
        
    }

    function adicionarProduto($idLista, $produto){
        $stmt = $this -> con -> prepare("INSERT INTO produto (idProduto, nome) values(:id,:nome)");
        $stmt -> bindValue(":id", 0);
        $stmt -> bindValue(":nome", $produto);
        if($stmt->execute()){
            $stmt = $this -> con -> prepare("SELECT idProduto from produto order by idProduto desc LIMIT 1");
            if($stmt -> execute()){
                $produtos = $stmt -> fetch();
                $idProduto = $produtos[0];
                $stmt = $this -> con -> prepare("INSERT INTO itens (idProduto,IDLista) values(:idProduto,:idLista)");
                $stmt -> bindValue(":idProduto",$idProduto);
                $stmt -> bindValue(":idLista",$idLista);
                if($stmt -> execute()){
                    return json_encode("Sucesso");
                }
            }
        }
    }

    function puxarListas($idUsuario){
        $stmt = $this -> con -> prepare("SELECT idlista, nomeLista from lista where idusuario = :ID order by  idlista DESC");
        $stmt -> bindValue(":ID", $idUsuario);
        $stmt->execute();
        
        if($stmt->rowCount()){
            $listas = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
            do{

                echo 
                '<li class="listas__lista" >
                    <button class = "lista__btn" data-id = ' . $listas[0] . '>
                        <h3 class="lista__nome">' . $listas[1] . ' </h3>
                    </button>
                </li>';
                
            }while($listas = $stmt -> fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
        }
        else{
            echo '<h3 class = "notFin">Nenhuma lista encontrada</h3>';
        }
    }

    function nomeLista($idUsuario,$idLista){
        $stmt = $this -> con -> prepare("SELECT nomelista FROM lista WHERE IDlista = :lista AND IDusuario = :usuario LIMIT 1");
        $stmt -> bindValue(':lista', $idLista);
        $stmt -> bindValue(':usuario', $idUsuario);
        $stmt -> execute();
        if($stmt -> rowCount()){
            $nome = $stmt -> fetch();
            printf('<h1 class="lista__nome">'. $nome[0].'</h1>');
        }
        
    }

    public function puxarProdutos($idUsuario,$idLista){
        $stmt = $this -> con -> prepare("SELECT lista.nomelista,
        produto.nome
        from itens 
        inner join produto
            on itens.idproduto = produto.idproduto
        inner join lista
            on itens.idlista = lista.idlista
        where  lista.idlista = :IDLista and lista.IDusuario = :IDCadastro;");

        $stmt ->bindValue(":IDLista", $idLista);
        $stmt ->bindValue(":IDCadastro", $idUsuario);

        $stmt -> execute();

        //verificando se puxou algum produto no banco de dados  
        if ($stmt -> rowCount()) {
            //se sim, mostrará todos os produtos que foi achado
            $produtos = $stmt -> fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
            do{
                
                echo 
                '<li class="lista__produto">
                    <div class = "produto__container">
                        <h3 class="produto__nome">' . $produtos[1] .'</h3>
                    </div>
                    <button class="produto__excluir">
                        <span class="material-symbols-outlined">
                            close
                            </span>
                    </button>
                </li>';
            }while($produtos = $stmt -> fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
        }
        else{
            //se não, retornará uma mensagem
            echo '<h3 class = "notFind">Nenhum produto encontrado</h3>';
        }
    }

} 