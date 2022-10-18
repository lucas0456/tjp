<?php
  include "nav.php";
?>
  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-md-6 col-md-4">
    <form class="row g-3 needs-validation" novalidate method="post" action="#">
        <div class="col-md-12 position-relative">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="validationTooltip01" aria-describedby="emailHelp"  name="email" required>
          <div class="valid-tooltip">
            Bom!
          </div>
          <div class="invalid-tooltip">
            E-mail invalido
          </div>
        </div>
        <div class="col-md-12 position-relative">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="validationTooltip02" aria-describedby="passwordHelp" name="senha" required>
          <div class="valid-tooltip">
            Bom!
          </div>
          <div class="invalid-tooltip">
            Senha invalida
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <label for="cpf" class="form-label">CPF</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="cpf" required>
            <div class="valid-tooltip">
              Bom!
            </div>
            <div class="invalid-tooltip">
              CPF invalido
            </div>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="validationTooltip03" name="endereco" required>
          <div class="valid-tooltip">
            Bom!
          </div>
          <div class="invalid-tooltip">
            Endereço invalido
          </div>
        </div>
        <div class="mb-3 mt-4">
                <div class="row">
                    <div class="col text-start"><button type="button" class="btn btn-primary">Voltar</button></div>
                    <div class="col text-end"><button type="submit" class="btn btn-primary">Cadastrar</button></div>
                </div>
            </div>
        <p class='text-center'>
                <a href="login.php">Já possuo cadastro</a>
        </p>
      </form>
      </section>
      </section>
    </section>
      <script>
       (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>