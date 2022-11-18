<?php

include "conexao.php";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereço'];

    $sql = "insert into livraria(email, senha, cpf, endereco) values('$email', '$senha', '$cpf', '$endereco')";
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