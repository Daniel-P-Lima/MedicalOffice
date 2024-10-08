<?php
    require_once("conexao.php");
    session_start();

    $email = $_POST["email"];
    $senhaFornecida = $_POST['senha'];


    if(!empty($email) && !empty($senhaFornecida)) {
        try {
            
            $query = "SELECT email, senha, id FROM usuario WHERE email = :email";
            $stmt = $pdo->prepare($query);

            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $usuario = $stmt->fetch();

            $senhaFornecidaComHash = hash("sha256", $senhaFornecida); 

            


            if ($usuario["email"] == $email) {
                $idUsuario = $usuario["id"];
                $senhaArmazenada = $usuario["senha"];
                if ($senhaFornecidaComHash == $senhaArmazenada) { 
                    header("Location: ../php/usuario_validado.php?");
                    $_SESSION['id_paciente'] = $usuario['id'];
                } else {
                    header("Location: ../php/login.php?login=erro");

                }
            } else {
                header("Location: ../php/login.php?login=erro2");
            }  
        }    
        catch(PDOException $e) {
            echo "Erro na conexão do Banco de Dados! Erro: " . $e;

        }
    }
    



?>
