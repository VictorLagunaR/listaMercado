<?php
include ('Connect.php');


class Cadastro{

    private $con;
    

    function __construct(){

        //instanciando a classe Connect
        $conexao = new Connect();
        //utilizando a função conexao do Conect.php
        $this-> con = $conexao->conexao();
        
    }

    function verificacao($email){
        
        $stmt = $this->con->prepare("SELECT email FROM cadastros WHERE email = :email");
        $stmt -> bindValue(":email", $email);
        $stmt ->execute();
        if(!$stmt->rowCount()){
            $cadastro = new Cadastro();
            $cadastro -> createUsuario($_POST['name'], $_POST['nascimento'], $_POST['email'], $_POST['password']);            
            
        }
        else{
            
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Erro</title>
            </head>
            <body>
                <h1>Email já utilizado</h1>
                <h2>Por favor, volte para a pagina de cadastro e utilize outro E-mail</h2>
                <a href="../View/cadastro.php">Voltar</a>
            </body>
            </html>
            <?php
            die();
        }
    }

    function createUsuario($n,$b,$e,$p){
        $stmt = $this->con->prepare("INSERT INTO cadastros (name, nascimento, email, password) VALUES (:name,:nascimento,:email,:password)");
        $stmt -> bindValue(":name", $n);
        $stmt -> bindValue(":nascimento", $n);
        $stmt -> bindValue(":email", $e);
        $stmt -> bindValue(":password", $p);

        if($stmt->execute()){
            header("Location: ../View/index.php");
        }
        else{
            echo "<h1> Erro ao finalizar o cadastro, tente novamente mais tarde</h1>";

        }
		
    }


}

?>
