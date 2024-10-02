<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Dr. Saúde</title>
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
        <form action="cadastro.php" class="d-flex mr-1">
            <button class="btn btn-success me-2" type="submit">
                <i class="bi bi-person-plus"></i> Criar Conta
            </button>
        </form>
        <form action="login.php">
            <button class="btn btn-outline-primary" type="submit">
                
                <i class="bi bi-box-arrow-in-right"></i> Acessar Conta
            </button>
        </form>

        </div>
    </div>
</nav>

    
    <div class="container">
        <h1>O consultório médico número 1 da América Latina!</h1>
        <h1>Sem se preocupar com deslocamento! Simples, rápido e fácil</h1>
        <h1>Marque consultas sem ligar e sem sair de casa!</h1>
        
    </div>
    
    <div class="img-container" >
        <img class="img-container-self" src="../imgs/medico.jpg" alt="">
        <img class="img-container-self" src="../imgs/medico2.jpg" alt="">
    </div>
    
    <footer>
        <span>&#169;</span>
        <p>Todos os direitos são reservados ao Dr.Saúde</p> 
    </footer>

</body>
</html>