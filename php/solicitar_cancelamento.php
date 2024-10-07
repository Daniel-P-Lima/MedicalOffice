<?php
    require_once("../scripts/verificar_consulta.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Dr Saúde</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <link rel="shortcut icon" href="../imgs/hospital(1).svg" type="image/x-icon">
  </head>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dr Saúde</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
                <a class="nav-link active" aria-current="page" href="usuario_validado.php">Página Inicial</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
  <div class="col-sm-9">
		<div class="container pagina">
				<div class="row">
						<div class="col">
							<h4>Suas consultas agendadas: </h4>
							<hr/>
                            <?php if(empty($consultas)) {?>
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Você não tem consultas agendadas</h4>
                                    <hr>
                                </div>
                                <?php }?> 
                                <?php foreach($consultas as $indice => $consulta) {?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9">
											<?php if($indice < 0) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <h4 class="alert-heading">Você não tem consultas agendadas</h4>
                                                    <hr>
                                                </div>
                                            <?php } else {?>  
                                                <form action="../scripts/validar_cancelamento.php" method="POST" >
                                                        <div class="alert alert-success" role="alert">
                                                            <h4 class="alert-heading"><?php echo "Data: ". $dataConsulta[$indice] . "<br/>" . "Médico: " . $consulta["nome"] ?></h4>
                                                            <hr>
                                                            <button type="submit" type="button" class="btn btn-outline-danger"><i class="bi bi-x-square m-2"></i>Solicitar Cancelamento</button>
                                                        </div>
                                                </form>
                                            <?php } ?>
										</div>
									</div>
							    <?php } ?>
						</div>
				</div>
		</div>
	</div>

    
  </body>
</html>