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