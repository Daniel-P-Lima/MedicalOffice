<?php
    require_once("conexao.php");
    session_start();
    $nomeUsuario = $_POST["nome"];
    $emailUsuario = $_POST["email"];
    $senhaUsuario = $_POST["senha"];
    $sexoUsuario = $_POST["sexo"];


    // BANCO DE DADOS
    

    if(!(filter_var($emailUsuario, FILTER_VALIDATE_EMAIL))){
        echo "<h1>Digite um email válido</h1>";
        header("Location: cadastro.php?email=erro");
    }

    try {
        $query = "INSERT INTO usuario (nome, email, senha, sexo) VALUES (:nome, :email, :senha, :sexo)";
    
       
        $stmt = $pdo->prepare($query);
    
    
        $stmt->bindValue(":nome", $nomeUsuario);
        $stmt->bindValue(":email", $emailUsuario);
        $stmt->bindValue(":senha", $senhaUsuario); // Aqui ele recebe a senha com hash para armazenar no banco de dados
        $stmt->bindValue(":sexo", $sexoUsuario);
    
        $stmt->execute();

        $_SESSION["id_paciente"] = $pdo->lastInsertId();
        header("Location: usuario_validado.php?");

    
    } catch (PDOException $e) {
        echo "Erro na inserção: " . $e->getMessage();
    }
    
    

    
?>
