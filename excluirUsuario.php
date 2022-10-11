<?php

    include "conexao.php";

    if(isset($_GET['email'])){
        $email = $_GET['email'];


        // Agora dar para excluir os usuários kkkkkkkkkkkkkkkkkkkkk
        $sql = "delete from usuarios where login = '$email'";
        $excluir = mysqli_query($conexao,$sql);

        // feedback ao usuário
        if($excluir){
            echo "
            <script>
                alert('Usuário Excluido com Sucesso!');
                window.location = 'listarUsuario.php';
            </script>
            ";
        }
        else {
            echo "
            <p> Banco de Dados temporariamente fora do ar.
            Tente novamente mais tarde. </p>
            <p> Entre em contato com o administrador do site.
            </p>
            ";
            echo mysqli_error($conexao);
        }
    }

?>