<?php 
    include "conexao.php";

    if(isset($_POST['email'])) {
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);


        //escreve a sql
        $sql = "select * from livraria where email = '$email' and senha = '$senha'";

        //executa a sql
        $testeLogin = mysqli_query($conexao, $sql);
        $existe = mysqli_num_rows($testeLogin);

        if($existe) {
            //carrega a sql em um vetor
            $dados = mysqli_fetch_array($testeLogin);
            $email = $dados['email'];
            $senha = $dados['senha'];
            $cpf = $dados['cpf'];
            $enderoco = $dados['enderoço'];

            if(!isset($_SESSION)) {
                session_start();
            } 

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['cpf'] = $cpf;
            $_SESSION['endereço'] = $endereco;


            if($email = "adm@gmail") {
                header('location: adm.php');
            }
            else {
                header('location: index.php');
            }
        }
        else {
            echo "<b>Email ou senha errados.</b>";       
        }
    }
?>