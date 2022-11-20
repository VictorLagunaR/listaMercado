<?php
session_start();
require_once "../Controller/Api.php";

$adicionar = new Api();

$adicionar -> adicionarProduto($_SESSION['IDlista'],$_POST['nome']);