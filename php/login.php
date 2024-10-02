<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="../js/hash_senha.js" ></script>
    <title>Login</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dr Saúde</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../php/index.php">Home</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="container">    
      <div class="row">
        <div class="card-login">
            <div class="card">
                <p>Login</p>
                <form action="valida_login.php" method="post">
                    <div>
                    <input class="form" name="email" type="email" class="" placeholder="E-mail" required>
                    </div>
                    <div>
                    <input id="senha" class="form" name="senha" type="password" class="" placeholder="Senha" required>
                    </div>

                    <?php 
                    if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                        <div class"text-danger" >
                        Usuário ou senha inválido(s)</div>
                    <?php }?>
                    
                    <button class="button" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>

        
    </div>
    </div>
</body>
</html>