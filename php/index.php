<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dr. Saúde</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                        <a class="nav-link active" aria-current="page" href="../php/index.php">Home</a>
                    </li>
                </ul>
                <form action="cadastro.php" class="d-flex me-2">
                    <button class="btn btn-success" type="submit">
                        <i class="bi bi-person-plus"></i> Criar Conta
                    </button>
                </form>
                <form action="login.php" class="d-flex">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="bi bi-box-arrow-in-right"></i> Acessar Conta
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container text-center my-5">
        <h1>O consultório médico número 1 da América Latina!</h1>
        <p class="lead">Sem se preocupar com deslocamento! Simples, rápido e fácil.</p>
        <p class="lead">Marque consultas sem ligar e sem sair de casa!</p>
    </div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6">
                <img src="../imgs/medico.jpg" class="img-fluid" alt="Médico">
            </div>
            <div class="col-md-6">
                <img src="../imgs/medico2.jpg" class="img-fluid" alt="Médico">
            </div>
        </div>
    </div>


    <footer class="bg-light text-center py-3">
        <p>&copy; Todos os direitos são reservados ao Dr. Saúde</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
