<?php
    include 'includes/header.php';
?>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-6 mb-5">
          <img src="assets/img/loginpet.png" class="img-fluid" alt="Phone image" style="max-width: 400px; height: auto;">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form1Example13" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Email</label>
            </div>

            <!-- Senha input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="form1Example23" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Senha</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Lembre-me</label>
              </div>
              <a href="#!">Esqueceu a senha?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Entrar</button>
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
