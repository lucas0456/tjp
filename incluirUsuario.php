<?php

include "conexao.php";

if (isset($_POST['email'])) {
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $endereco = $_POST['enderoco'];

    $sql = "insert into usuarios(login, senha, nome, email, nivel, foto) values('$email', '$senha', '$cpf', '$endereco')";
    $incluir = mysqli_query($conexao,$sql);

    if($incluir) {
        echo "<script> 
        alert('Usuário cadastrado com sucesso!');
        window.location = 'listarUsuario.php';
        </script>";

    }
    else {
        echo "
            <p> Sistema temporariamente fora do ar. </p>
            <p> Entre em contato com o administrador do sistema. </p>
        ";
    }


} else {
    echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='formularioUsuario.php'>Aqui</a> para incluir um usuário. </p>
    ";
}

?>