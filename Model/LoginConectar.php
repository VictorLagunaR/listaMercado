<?php
    require_once '../Controller/Login.php';

    $login = new Login();
    $login->verificacaoLogin($_POST['email'],$_POST['pass']);