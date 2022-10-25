<?php
include ('Connect.php');
session_start();
$_SESSION['nome'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['localizacao'] = $_POST['localidade'];
$_SESSION['idade'] = $_POST['nascimento'];
$_SESSION['password'] = $_POST['password'];

$formulario = [
    "nome" => $_POST['name'],
    "email" => $_POST['email'],
    "localizacao" => $_POST['localidade'],
    "idade" => $_POST['nascimento'],
    "password" => $_POST['password']
];

class Cadastro{

    private $con;

    function __construct(){

        //instanciando a classe Connect
        $conexao = new Connect();
        //utilizando a função conexao do Conect.php
        $this-> con = $conexao->conexao();
        
    }

    function verificacao($email){
        $stmt = $this->con->prepare("SELECT email FROM cadastros WHERE email = ?");
        $stmt -> bind_param("s", $email);
        $resul = $stmt -> get_result();
        if(strlen($resul) == 0){

            $cadastro = new Cadastro();
            $cadastro -> createUsuario($_POST['name'], $_POST['nascimento'], $_POST['email'], $_POST['password']);            
        }
        else{
            echo "E-mail já utilizado!";
            header("Location: ../View/cadastro.html");
        }
    }

    function createUsuario($n,$b,$e,$p){
        $stmt = $this->con->prepare("INSERT INTO cadastros (name, nascimento, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $n, $b, $e, $p);
        if($stmt->execute()){
            header("Location: ../View/login.php");
        }
        else{
            echo "<h1> Erro ao finalizar o cadastro, tente novamente mais tarde</h1>";

        }
		
    }


}

?>
