<?php
    include 'includes/header.php';
?>
<section class="d-flex align-items-center" style="background-color: #f8f9fa; padding-top: 100px; padding-bottom: 100px; min-height: 100vh;">
  <div class="container py-5">
    <div class="row align-items-center justify-content-center">

      <!-- Coluna do formulário (à esquerda) -->
      <div class="col-md-6 col-lg-5">
        <form style="background-color: #fff; border: 1px solid #00569d; border-radius: 15px; padding: 30px;">

          <!-- Nome -->
          <div class="form-outline mb-3">
            <strong class="form-label" for="nome" style="color:#00569d">Nome:</strong>
            <input type="text" id="nome" class="form-control form-control-lg" placeholder="Digite seu nome" />
          </div>

          <!-- Telefone -->
          <div class="form-outline mb-3">
            <strong class="form-label" for="telefone" style="color:#00569d">Telefone:</strong>
            <input type="tel" id="telefone" class="form-control form-control-lg" placeholder="(xx) xxxxx-xxxx" />
          </div>

          <!-- CPF -->
          <div class="form-outline mb-3">
            <strong class="form-label" for="cpf" style="color:#00569d">CPF:</strong>
            <input type="text" id="cpf" class="form-control form-control-lg" placeholder="000.000.000-00" />
          </div>

          <!-- Email -->
          <div class="form-outline mb-3">
            <strong class="form-label" for="email" style="color:#00569d">Email:</strong>
            <input type="email" id="email" class="form-control form-control-lg" placeholder="seuemail@exemplo.com" />
          </div>

          <!-- Senha -->
          <div class="form-outline mb-4">
            <strong class="form-label" for="senha" style="color:#00569d">Senha:</strong>
            <input type="password" id="senha" class="form-control form-control-lg" placeholder="********" />
          </div>

          <!-- Tipo de Usuário -->
          <div class="mb-4 text-center">
            <div class="btn-group" role="group" aria-label="Tipo de Usuário">
              <button type="button" class="btn btn-outline-primary">Administrador</button>
              <button type="button" class="btn btn-outline-primary">Cliente</button>
            </div>
          </div>

          <!-- Link de login -->
          <div class="text-center mb-4">
            <a href="login.php">Já tem uma conta?</a>
          </div>

          <!-- Botão de envio -->
          <button type="submit" class="btn btn-primary btn-lg w-100">Cadastrar</button>
        </form>
      </div>

    </div>
  </div>
</section>




<?php
    include 'includes/footer.php';
?>
</body>
</html>



