<?php

    $dsn = 'mysql:host=127.0.0.1; dbname=consultorio_medico';
    $usuarioBanco = 'root';
    $senhaBanco = 'password';

    $email = $_POST["email"];
    $senhaFornecida = $_POST['senha']; // A senha fornecida é a senha sem hash


    if(!empty($email) && !empty($senhaFornecida)) {
        try {
            $conexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
            $query = "SELECT email, senha, id FROM usuario WHERE email = :email";
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $usuario = $stmt->fetch();

            /* Aqui é calculado o hash da senha recebida para validação depois
            A ideia é criptografar a senha somente quando o usuário se cadastra
            Para não trafegar na rede a senha já com hash, que seria a senha de acesso
            */
            $senhaFornecidaComHash = hash("sha256", $senhaFornecida); 
            
            

            /*if($usuario["email"] == $email && $usuario["senha"] == $senha) {        
                $usuarioAutenticado = true;
                
            } 
            */

            


            if ($usuario["email"] == $email) {
                $idUsuario = $usuario["id"];
                $senhaArmazenada = $usuario["senha"];
                // A senha recebida + hash é comparada com a senha com hash armazenada no banco
                if ($senhaFornecidaComHash == $senhaArmazenada) { 
                    header("Location: usuario_validado.php?id=" . $idUsuario);
                } else {
                    header("Location: login.php?login=erro");

                }
            } else {
                // Usuário não encontrado
                echo "Usuário ou senha não encontrado.";
            }  
        }    
        catch(PDOException $e) {
            echo "Erro na conexão do Banco de Dados! Erro: " . $e;

        }
    }
    



?>
