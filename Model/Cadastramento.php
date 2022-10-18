<?php

require_once '../Controller/Cadastro.php';

$verificacao = new Cadastro();
$verificacao ->verificacao($_POST['email'])

?>