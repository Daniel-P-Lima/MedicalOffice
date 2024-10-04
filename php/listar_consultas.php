<?php
    require_once('verificar_consulta.php');
?>


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
                    <li>
                        <a class="nav-link active" aria-current="page" href="../php/usuario_validado.php">Página Inicial</a>
                    </li>
                </ul>
                <form action="logout.php" class="d-flex mr-1">
                    <button id="sair" class="btn btn-danger me-2" type="submit">
                        <i class="bi bi-box-arrow-right me-2"></i>Sair
                    </button>
                </form>
            </div>
        </div>
    </nav>

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
                                                <div class="alert alert-success" role="alert">
                                                    <h4 class="alert-heading"><?php echo "Data: ". $dataConsulta[$indice] . "<br/>" . "Médico: " . $consulta["nome"] ?></h4>
                                                    <hr>
                                            </div>
                                            <?php } ?>
										</div>
									</div>
								<?php } ?>
			
							</div>
						</div>
					</div>
		</div>


</body>