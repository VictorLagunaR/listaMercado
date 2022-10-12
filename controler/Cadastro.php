<?php
include ('Connect.php');


class Cadastro{

    private $con;

    function __construct(){

        //instanciando a classe Connect
        $conexao = new Connect();
        //utilizando a função conexao do Conect.php
        $this-> con = $conexao->conexao();

        
        echo "<h1>Our System!</h1>";
    }


    function createUsuario($n,$b,$e,$p){
        $stmt = $this->con->prepare("INSERT INTO cadastros (name, nascimento, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $n, $b, $e, $p);
        if($stmt->execute()){
            ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    
                </body>
                </html>
            <?php
        }
        else{
            echo "<h1> Erro ao finalizar o cadastro, tente novamente mais tarde</h1>";

        }
		
    }


}

    $cadastro = new Cadastro();
    $cadastro ->createUsuario($_POST['name'], $_POST['nascimento'], $_POST['email'], $_POST['password']);

?>
