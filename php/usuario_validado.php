<?php
  session_start();
  if (!isset($_SESSION['id_paciente'])) {
      
      header('Location: login.php');
      exit;
  }
  $dsn = 'mysql:host=localhost; dbname=consultorio_medico';
  $usuarioBanco = 'root';
  $senhaBanco = '';
  $id = $_SESSION["id_paciente"];
  $nome = "";
  $senha = "";
  if(isset($id)) {
    try {
      $conexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
     
      $query = "SELECT nome, sexo FROM usuario WHERE id = :id ";

      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":id", $id);
      $stmt->execute();

      $usuario = $stmt->fetch();
    }catch(PDOException $e) {
      echo "Erro: " . $e->getMessage();
    }
  }

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../imgs/hospital(1).svg" type="image/x-icon">
    
    
    <title>Dr Saúde</title>
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
        <form action="logout.php" class="d-flex mr-1">
            <button id="sair" class="btn btn-danger me-2" type="submit">
                <i class="bi bi-box-arrow-right me-2"></i>Sair
            </button>
        </form>
        </div>
    </div>
    </nav>
    <div class="container-fluid">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              <?php
              $nome = $usuario["nome"];
              $sexo = $usuario["sexo"];

              if($sexo == "Masculino") {
                  echo "Seja Bem-Vindo! " . $nome;
              }
              else if($sexo == "Feminino") {
                echo "Seja Bem-Vinda! " . $nome;
              }
              else {
                echo "Seja Bem-Vindo(a)! " . $nome;
              }?>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-4 d-flex justify-content-center text-center">
                  <a class="text-decoration-none" href="agendar_consulta.php">
                    <img src="../imgs/consulta.png" width="70" height="70">
                    <p>Agendar Consulta</p>
                  </a>
                </div>
                <div class="col-4 d-flex justify-content-center text-center">
                  <a class="text-decoration-none" href="verificar_consulta.php">
                    <img src="../imgs/verifica.png" width="70" height="70">
                    <p>Verificar Consultas</p>
                  </a>
                </div>
                <div class="col-4 d-flex justify-content-center text-center">
                  <a class="text-decoration-none" href="cancelar_consulta.php">
                    <img src="../imgs/cancela.png" width="70" height="70">
                    <p>Solicitar Cancelamento De Consulta</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
</body>
</html>