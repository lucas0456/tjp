<?php 
include "controle.php";
include "conexao.php";

$sql = "select * from usuarios order by nome";
$seleciona = mysqli_query($conexao,$sql);

?>

    <div class="container p-5">
        <div class="text-end">
        <a href="formularioUsuario.php "><button type="button" class="btn btn-sm btn-success"> Novo Usuário</button></a>
        </div>
        <h1 class="text-center">Lista de usuários</h1>
        <hr>
        <div class="container text-center p-2">
            <div class="row bg-dark text-white">
                <div class="col-1"> Email </div>
                <div class="col-1"> Senha </div>
                <div class="col-3"> CPF </div>
                <div class="col-1"> Endereço </div>
            </div>
            <?php
            while($exibe = mysqli_fetch_array($seleciona)) {
                $email = $exibe['email'];
            ?>
            <div class="row text-black p-1">
                <div class="col-1"> 
                    <?php echo $exibe['email'];?> 
                </div>
                <div class="col-1"> 
                    ***** 
                </div>
                <div class="col-2"> 
                    <?php echo $exibe['cpf'];?>
                 </div>
                <div class="col-3"> 
                    <?php echo $exibe['endereco'];?>
                </div>
                <div class="col-3 text-center"> 
                    <a href="visualizarUsuario.php?login=<?php echo $email;?>"><button type="button" class="btn btn-sm btn-success"> Visualizar</button></a>
                    <button type="button" class="btn btn-sm btn-warning"> Editar</button><a href="excluirUsuario.php?login=<?php echo $email; ?>" onclick="return confirm('Confirma a Exclusão do Usuário?')">
                    <button type="button" class="btn btn-sm btn-danger"> Excluir</button></a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

<?php 
include "footer.php";

?>