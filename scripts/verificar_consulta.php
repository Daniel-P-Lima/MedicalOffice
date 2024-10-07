<?php
    require_once("conexao.php");
    session_start();

    if(!(isset($_SESSION["id_paciente"]))) {
        header("Location: ../php/login.php");
        exit;
    }

    $idUsuario = $_SESSION["id_paciente"];

    try {
        $query = "SELECT id_consulta, data_consulta, medicos.nome
        FROM consultas
        INNER JOIN usuario ON consultas.fk_key_paciente = usuario.id 
        INNER JOIN medicos ON consultas.fk_key_medico = medicos.id
        WHERE usuario.id = :id_usuario;";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(":id_usuario", $idUsuario);
        $stmt->execute();
        
        $consultas = $stmt->fetchAll();
        // $dataConsulta = new DateTime();
        // $dataConsulta->date_create_from_format($consultas[0]["data_consulta"],"Y-m-d");
        
        for($i = 0; $i < count($consultas); $i++) {
            $dataConsulta[] = date("d/m/Y", strtotime($consultas[$i]["data_consulta"]));
        }// $dataConsulta = date_format($consultas[0]["data_consulta"], "d/m/Y");

    } catch(PDOException $e) {
        echo "Erro no PDO -> " . $e->getMessage();
    }



?>