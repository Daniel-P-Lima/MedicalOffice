<?php 
    require("verificar_consulta.php");

    $idConsulta = $consultas[0]["id_consulta"];

    $dsn = 'mysql:host=localhost; dbname=consultorio_medico';
    $usuarioBanco = 'root';
    $senhaBanco = '';

    try{
    $conexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
       
    $query = "DELETE FROM consultas WHERE id_consulta = :id_consulta";

    $stmt = $conexao->prepare($query);
    $stmt->bindValue(":id_consulta", $idConsulta);
    $stmt->execute();
    header("Location: solicitar_cancelamento.php");
    } catch(PDOException $e) {
        "Erro: " . $e->getMessage();
    }
?>