<?php
    //Conexão com o banco
    $local = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "livraria";

    $conexao = mysqli_connect($local, $usuario, $senha, $banco);

    header("Content-Type: text/html; charset=utf-8");
  /*  mysqli_query($conexao, "SET NAME 'utf-8'");
    mysqli_query($conexao, "SET character_set_connection = utf8");
    mysqli_query($conexao, "SET character_set_client = utf8");
    mysqli_query($conexao, "SET character_set_result = utf8");*/
?>