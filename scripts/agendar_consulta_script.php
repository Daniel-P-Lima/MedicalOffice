<?php
require_once("conexao.php");
session_start();
if (!isset($_SESSION['id_paciente'])) {

  header('Location: ../php/login.php');
  exit;
}

$idPaciente = $_SESSION['id_paciente'];

try {
  $query = "SELECT * FROM medicos";


  $stmt = $pdo->prepare($query);
  $stmt->execute();

  $medicos = $stmt->fetchAll();
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}

if (!isset($_GET["agendada"])) {
  $consultaValidada = 0;
} else {
  $consultaValidada = $_GET["agendada"];
};
