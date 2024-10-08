<?php
    session_start();

    require_once("conexao.php");
    $emailAdm = $_POST["email"];
    $senhaAdm = $_POST["senha"];

    try {
        $query = "SELECT * FROM administradores WHERE email = :email AND senha = :senha;";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(":email", $emailAdm);
        $stmt->bindValue(":senha", $senhaAdm);

        $stmt->execute();
        $adm = $stmt->fetch();

        if($adm["email"] === $emailAdm && $adm["senha"] === $senhaAdm) {
            header("Location: ../php/usuario_validado.php");
            $_SESSION["id_administrador"] = $adm["id_administrador"];
        }
        else {
            header("Location: ../php/login_adminstrador.php");
        }
    }catch(\PDOException $e) {
        throw new \PDOException($e) . $e->getMessage();
    }

    



?>