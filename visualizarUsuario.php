<?php

    include "conexao.php";
    include "controle.php";

    if(isset($_GET['email'])){
        $login = $_GET['email'];

        $sql = "select * from livraria where login = '$email'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);
            $senha = $exibe['senha'];
            $cpf = $exibe['cpf'];
            $endereco = $exibe['endereco'];
    }
    ?>
    <div class="container text-start bg-gradient p-3">
        <div class="row">
            <div class="col-10 text-danger">
            <?php
            echo "
                <p> Login: $email </p>
                <p> Senha: ****** </p>
                <p> CPF: $cpf </p>
                <p> Endereco: $enderco </p>
            ";
            ?>
            </div>
        </div>
    </div>
