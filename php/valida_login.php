<?php

    $dsn = 'mysql:host=127.0.0.1; dbname=consultorio_medico';
    $usuarioBanco = 'root';
    $senhaBanco = 'password';

    $email = $_POST["email"];
    $senhaFornecida = $_POST['senha'];


    if(!empty($email) && !empty($senhaFornecida)) {
        try {
            $conexao = new PDO($dsn, $usuarioBanco, $senhaBanco);
            $query = "SELECT email, senha, id FROM usuario WHERE email = :email";
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $usuario = $stmt->fetch();

            $senhaFornecidaComHash = hash("sha256", $senhaFornecida);
            

            /*if($usuario["email"] == $email && $usuario["senha"] == $senha) {        
                $usuarioAutenticado = true;
                
            } 
            */

            


            if ($usuario["email"] == $email) {
                $idUsuario = $usuario["id"];
                $senhaArmazenada = $usuario["senha"];
                
                if ($senhaFornecidaComHash == $senhaArmazenada) {
                    header("Location: usuario_validado.php?id=" . $idUsuario);
                } else {
                    echo $senhaArmazenada;
                    echo "<hr/>";
                    echo $senhaFornecida;
                    // header("Location: login.php?login=erro");

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
