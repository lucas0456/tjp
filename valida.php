<?php 
    include "conexao.php";

    if(isset($_POST['email'])) {
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);


        //escreve a sql
        $sql = "select * from usuarios where login = '$email' and senha = '$senha'";

        //executa a sql
        $testeLogin = mysqli_query($conexao, $sql);
        $existe = mysqli_num_rows($testeLogin);

        if($existe) {
            //carrega a sql em um vetor
            $dados = mysqli_fetch_array($testeLogin);
            $senha = $dados['senha'];
            $cpf = $dados['cpf'];
            $enderoco = $dados['enderoço'];
            $email = $dados['email'];

            if(!isset($_SESSION)) {
                session_start();
            } 

            $_SESSION['senha'] = $senha;
            $_SESSION['cpf'] = $cpf;
            $_SESSION['email'] = $email;
            $_SESSION['endereço'] = $endereco;


            if($nivel = "adm") {
                header('location: adm.php');
            }
            else {
                header('location: perfil.php');
            }
        }
        else {
            echo "<b>Usuário ou senha roubados.</b> <br>
            <img src='../imagens/lula.png' alt='' width='50px' height='50px'>";
        ;
        }
    }
?>