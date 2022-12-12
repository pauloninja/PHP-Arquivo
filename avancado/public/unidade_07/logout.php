<?php require_once("../../conexao.php/conexao.php"); ?>

<?php

    session_start();
    //vai manda para a tela de login
    unset($_SESSION["user_portal"]);
    header("location:login.php");

?>

