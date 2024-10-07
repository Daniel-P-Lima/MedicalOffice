<?php
    require_once("../scripts/agendar_consulta_script.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../imgs/hospital(1).svg" type="image/x-icon">
    
    <title>Dr. Saúde</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dr Saúde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                <a class="nav-link active" aria-current="page" href="../php/usuario_validado.php">Página Inicial</a>
                </li>
            </ul>
            <form action="logout.php" class="d-flex mr-1">
                <div name="sair">
                    <button class="btn btn-danger me-2" type="submit">
                        <i class="bi bi-box-arrow-right me-2"></i>Sair
                    </button>
                </div>    
            </form>
            </div>
        </div>
    </nav>
    <form class="row g-3" method="POST" action="../scripts/consultas.php">
        <div class="col-md-3">
            <label for="data" class="form-label">Data da consulta: </label>
            <input type="text" name="data" id="data" class="form-control" placeholder="DD/MM/AAAA" maxlength="10" required>
        </div>
        <div class="col-md-4">
            <label for="medico" class="form-label">Médico:</label>
            <select name="medico" id="medico" class="form-control" required>
                <option value="" disabled >Selecione um médico</option>
                <?php foreach ($medicos as $medico): if($medico["disponivel"] == 1) { ?>
                    <option value="<?php echo $medico['id']; ?>">
                        <?php echo $medico['nome']; } else {?>
                        <option value="" disabled>
                            <?php echo $medico['nome'] . ", Indisponível";}
                            ?>
                        </option>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agendar consulta</button>
        </div>
    </form>
    <div id="alertBox" class="alert alert-danger alert-dismissible fade show d-none" role="alert">
        <h4 id="alertHeading" class="alert-heading"></h4>
        <p id="alertMessage"></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div>
        <?php if($consultaValidada == 1){?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Consulta Agendada Com Sucesso!</h4>
                <p>Sua consulta foi agendada! Lembre de levar os documentos necessários para ser atendido!</p>
                <hr>
                <p class="mb-0">Consultas agendadas só serão canceladas ou adiadas somente se o prazo de agendamento não exceder 48 horas</p>
            </div>
        <?php } else if($consultaValidada == 2) {?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Data inválida!</h4>
                <p>Verifique se você digitou a data correta e tente novamente</p>
                <hr>
            </div>

            <?php }?>
    </div>
    
    <script src="../js/input_para_consulta.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>  
</body>