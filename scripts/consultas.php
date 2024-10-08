<?php
    session_start();
    if (!isset($_SESSION['id_paciente'])) {
        header('Location: ../php/login.php');
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


        if (!empty($dataConsulta)) {

            $dataObj = DateTime::createFromFormat('d/m/Y', $dataConsulta);


            if ($dataObj && $dataObj->format('d/m/Y') === $dataConsulta) {

                $dataFormatada = $dataObj->format('Y-m-d');
            } else {
                header("Location: ../php/agendar_consulta.php?agendada=" . 2);
                exit;
            }
        } else {
            header("Location: ../php/agendar_consulta.php?agendada=" . 0);
            exit;
        }

        $query = "INSERT INTO consultas (data_consulta, fk_key_paciente, fk_key_medico) VALUES (:data_consulta, :idPaciente, :idMedico)";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":data_consulta", $dataFormatada);
        $stmt->bindValue(":idPaciente", $idPaciente);
        $stmt->bindValue(":idMedico", $idMedico);

        $stmt->execute();

        header("Location: ../php/agendar_consulta.php?agendada=" . 1);


    }catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
    }


?>