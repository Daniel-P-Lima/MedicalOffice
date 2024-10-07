<?php 
    require("verificar_consulta.php");
    require_once("conexao.php");
    $idConsulta = $consultas[0]["id_consulta"];

    

    try{
       
    $query = "DELETE FROM consultas WHERE id_consulta = :id_consulta";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":id_consulta", $idConsulta);
    $stmt->execute();
    header("Location: ../php/solicitar_cancelamento.php");
    } catch(PDOException $e) {
        "Erro: " . $e->getMessage();
    }
?>