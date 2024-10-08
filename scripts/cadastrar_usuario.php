<?php
    require_once("conexao.php");
    session_start();
    $nomeUsuario = $_POST["nome"];
    $emailUsuario = $_POST["email"];
    $senhaUsuario = $_POST["senha"];
    $sexoUsuario = $_POST["sexo"];




    if(!(filter_var($emailUsuario, FILTER_VALIDATE_EMAIL))){
        echo "<h1>Digite um email válido</h1>";
        header("Location: ../php/cadastro.php?email=erro");
    }

    try {
        $query = "INSERT INTO usuario (nome, email, senha, sexo) VALUES (:nome, :email, :senha, :sexo)";
    
       
        $stmt = $pdo->prepare($query);
    
    
        $stmt->bindValue(":nome", $nomeUsuario);
        $stmt->bindValue(":email", $emailUsuario);
        $stmt->bindValue(":senha", $senhaUsuario);
        $stmt->bindValue(":sexo", $sexoUsuario);
    
        $stmt->execute();

        $_SESSION["id_paciente"] = $pdo->lastInsertId();
        header("Location: ../php/usuario_validado.php?");

    
    } catch (PDOException $e) {
        echo "Erro na inserção: " . $e->getMessage();
    }
    
    

    
?>
