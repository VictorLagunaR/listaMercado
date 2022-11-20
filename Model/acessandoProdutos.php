<?php
    session_start();
    require_once ("../Controller/Api.php");
    $api = new Api();
    $api -> puxarProdutos($_SESSION['idUsuario'],$_SESSION['IDlista']);
?>