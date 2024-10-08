<?php
  require_once("conexao.php");
  session_start();
  if (!isset($_SESSION['id_paciente']) && !isset($_SESSION["id_administrador"])) {
      
      header('Location: login.php');
      exit;
  }
  $id = $_SESSION["id_paciente"];
  $nome = "";
  $senha = "";
  if(isset($id)) {
    try {
     
      $query = "SELECT nome, sexo, id FROM usuario WHERE id = :id ";

      $stmt = $pdo->prepare($query);
      $stmt->bindValue(":id", $id);
      $stmt->execute();

      $usuario = $stmt->fetch();
    }catch(PDOException $e) {
      echo "Erro: " . $e->getMessage();
    }
  }

?>