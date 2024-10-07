<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Dr Saúde</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <link rel="shortcut icon" href="../imgs/hospital(1).svg" type="image/x-icon">
    <script src="../js/hash_senha.js" >
    </script>
  </head>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dr Saúde</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../html/index.html">Home</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <form class="row g-3 "  method="POST" action="../scripts/cadastrar_usuario.php" onsubmit="return hashPassword();">
    <div class="col-md-3">
        <label for="formGroupExampleInput" class="form-label">Nome</label>
        <input name="nome" type="nome" class="form-control" id="inputName2" placeholder="Nome" required>
      </div>
      <div class="col-md-3">
        <label for="inputEmail4" class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
        <?php 
            if(isset($_GET["email"]) && $_GET["email"] == "erro") { ?>
            <div class "text-danger">
                Digite um email válido
            </div>
        <?php }?>
      </div>
      <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Senha</label>
        <input id="senha" name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha" required>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Sexo</label>
        <select name="sexo" id="inputState" class="form-select" required>
          <option selected="" disabled >Selecione</option>
          <option value="Masculino" >Masculino</option>
          <option value="Feminino" >Feminino</option>
          <option value="Outro" >Outro(a)</option>
        </select>
      </div>
      <div class="col-12">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar-se</button>
      </div>
    </form>
    <script src="../js/hash_senha.js" >
    </script>
          

  </body>
</html>