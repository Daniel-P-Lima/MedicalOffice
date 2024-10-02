<?php

    $dsn = 'mysql:host=localhost; dbname=consultorio_medico';
    $usuarioBanco = 'root';
    $senhaBanco = '';

    $email = $_POST["email"];
    $senhaFornecida = $_POST['senha'];


    if(!empty($email) && !empty($senha)) {
        try {
            $conexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
            $query = "SELECT email, senha FROM usuario WHERE email = :email";
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $usuario = $stmt->fetch();
            

            /*if($usuario["email"] == $email && $usuario["senha"] == $senha) {        
                $usuarioAutenticado = true;
                
            } 
            */
            

            if ($usuario["email"] == $email) {
                $senhaHashArmazenada = $usuario['senha'];
        
                if (password_verify($senha, $senhaArmazenada)) {
                    echo "teste";
                    header("Location: usuario_validado.php?id=" . $id);
                } else {
                    echo "$senha";
                    echo "Usuário ou senha inválidos.";
                }
            } else {
                // Usuário não encontrado
                echo "$senha";
                echo "Usuário ou senha não encontrado.";
            }  
        }    
        catch(PDOException $e) {
            echo "Erro na conexão do Banco de Dados! Erro: " . $e;

        }
    }
    



?>
