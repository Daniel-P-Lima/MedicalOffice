<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Dr. Saúde</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="../js/hash_senha.js"></script>
    <link rel="shortcut icon" href="../imgs/hospital(1).svg" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dr. Saúde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../html/index.html">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
        <div class="card shadow-sm" style="max-width: 400px; width: 100%;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                <form action="valida_login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Seu e-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" required>
                    </div>

                    <?php 
                    if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                        <div class="alert alert-danger" role="alert">
                            Usuário ou senha inválido(s)
                        </div>
                    <?php }?>

                    <?php 
                    if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                        <div class="alert alert-danger" role="alert">
                            Usuário não encontrado
                        </div>
                    <?php }?>

                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/hash_senha.js"></script>
</body>
</html>
