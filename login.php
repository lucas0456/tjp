<?php
  include "nav.php";
?>  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sn-6 col-md-4">
        <form class="form-container-center" method="post" action="#">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelp" name="senha" required>
            <div id="passwordHelpBlock" class="form-text">
              Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.
            </div>
          </div>
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary mb-3" value='Logar'>
        </div>
        <p class='text-center'>
            <a href="cada.php">Não possuo cadastro</a>
        </p>
        <p class="text-center text-danger">
          <?php 
          include "valida.php";
          ?>
        </p>
        </form>
    </section>
  </section>
</section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>