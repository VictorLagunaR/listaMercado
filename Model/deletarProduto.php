<?php
    session_start();
    require_once "../Controller/Api.php";
    $api = new Api();

    $api -> deletarProduto($_POST['ID']);
?>