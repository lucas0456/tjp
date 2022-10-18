<?php
    include "nav.php";

    if(isset($_SESSION)){
        session_start();
        } 
        if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $senha = $_SESSION['senha'];
                $cpf = $_SESSION['cpf'];
                $endereco = $_SESSION['endereco'];
                        echo "
                        Bem-vindo $email |
                        <a href='logout.php'> LOGOUT </a>
                        ";
                    }
                    else {
                        echo "
                        <a href='\php/adm/login.php'> LOGIN </a> |
                        <a href='formularioUsuario.php'> Não possuo cadastro </a>
                        ";
                    }
?>