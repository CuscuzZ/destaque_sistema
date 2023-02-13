<!doctype html>
<html lang="en">

<?php include '_head.php'; ?>

<body>
    <main>
      <section id="login">
        <div class="container p-0">
          <div class="row tela-login">
            <div class="col-sm-6 offset-sm-1 p-0 ">
              <div class="bg-login box-img" style="background-image: url(assets/img/checking-conditioner.jpg);">
            
              </div>
            </div>
            <div class="col-sm-4 box-login">
              <h1>Login do aluno:</h1>
              <form>
                <div class="mb-3">
                  <label class="form-label">Informe seu Usuário:</label>
                  <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Senha:</label>
                  <input type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-login">Acessar</button>
                <a href="#" onclick="myFunction()" class="btn-esqueceu">Esqueceu a senha?</a>
              </form>
            </div>
          </div>
        </div>
      </section>
      
    </main>
  <?php include '_footer.php'; ?>
  <?php include '_script-footer.php'; ?>

  <script>
    function myFunction() {
      alert("A senha de acesso para os conteúdos da turma, so podem ser resetados pelo professor do curso, caso tenha esquecido a senha ou esteja tendo problemas para acessar, solicite ao professor que reenvie a senha.")
    }
  </script>


  </body>
</html>
