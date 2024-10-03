<?php
    session_start();
    if (!isset($_SESSION['id_paciente'])) {
        header('Location: login.php');
        exit;
    }

    $dsn = 'mysql:host=localhost; dbname=consultorio_medico';
    $usuarioBanco = 'root';
    $senhaBanco = '';

    $idPaciente = $_SESSION["id_paciente"];
    $dataConsulta = isset($_POST['data']) ? $_POST['data'] : '';
    $idMedico = (int)$_POST["medico"];
    var_dump($dataConsulta);

    try{
        $conexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
        
        $query = "SELECT * FROM usuario WHERE id = :id ";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id", $idPaciente);
        $stmt->execute();

        $usuario = $stmt->fetch();
        echo "<pre>";
        print_r($usuario);
        echo "</pre>";

        $dataConsulta = trim($dataConsulta);

        // Verifica se a data não está vazia
        if (!empty($dataConsulta)) {
            // Tenta criar um objeto DateTime a partir da data informada
            $dataObj = DateTime::createFromFormat('d/m/Y', $dataConsulta);

            // Verifica se a data é válida
            if ($dataObj && $dataObj->format('d/m/Y') === $dataConsulta) {
                // Converte a data para o formato YYYY-MM-DD
                $dataFormatada = $dataObj->format('Y-m-d');
            } else {
                header("Location: agendar_consulta.php?agendada=" . false);
                echo "Data da consulta inválida.";
                exit;
            }
        } else {
            echo "Data da consulta não informada.";
            exit;
        }

        $query = "INSERT INTO consultas (data_consulta, fk_key_paciente, fk_key_medico) VALUES (:data_consulta, :idPaciente, :idMedico)";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":data_consulta", $dataFormatada);
        $stmt->bindValue(":idPaciente", $idPaciente);
        $stmt->bindValue(":idMedico", $idMedico);

        $stmt->execute();

        header("Location: agendar_consulta.php?agendada=" . true);


    }catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
    }


?>