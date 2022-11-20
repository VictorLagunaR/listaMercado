<?php

    include('Connect.php');
    //iniciando sessão caso não tenha sido iniciado
    session_start();

    class Login{

        private $con;
        private $email;
        private $password;

        function __construct()
        {
            //Conectando com o banco de dados
            $conectar = new Connect();
            $this->con = $conectar->conexao();
        }

        function getEmail(){
            return $this->email;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function getpassword(){
            return $this->password;
        }
        function setpassword($password){
            $this->password = $password;
        }

        function verificacaoLogin($e,$p){
            $stmt = $this->con->prepare("SELECT email, password, IDusuario, name FROM cadastros where email = :email and password = :password");
            $stmt -> bindValue(":email", $e);
            $stmt -> bindValue(":password", $p);
            $stmt->execute();
            if ($stmt -> rowCount()) {
                
                $_SESSION['idUsuario'] = $stmt -> fetchColumn(2);
                
                header("Location: ../View/sistema.php");
            }
            else{
                $_SESSION['msg'] = "E-mail ou senha Incorretos!";
                header("Location: ../View/index.php");
            }
        }
    }
?>