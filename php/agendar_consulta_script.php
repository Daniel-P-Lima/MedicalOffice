<?php
    session_start();
    if (!isset($_SESSION['id_paciente'])) {
        
        header('Location: login.php');
        exit;
    }

    $idPaciente = $_SESSION['id_paciente'];

    $dsn = 'mysql:host=localhost; dbname=consultorio_medico';
    $usuarioBanco = 'root';
    $senhaBanco = '';
    $nome = "";
    $senha = "";
    
      try {
        $conexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
       
        $query = "SELECT * FROM medicos";
  
        $stmt = $conexao->prepare($query);
        $stmt->execute();
  
        $medicos = $stmt->fetchAll();
      }catch(PDOException $e) {
        echo "Erro: " . $e->getMessage();
      }
        
      if(!isset($_GET["agendada"])) {
        $consultaValidada = 0;
      }
      else {
        $consultaValidada = $_GET["agendada"];
      };

?>