<?php 
        session_start();

        //importa dos dados do banco com método include()
        include("conexao.php");
        
        // Verificar se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            // Obter dados do formulário
            $email = $_POST["email"];
            $senha = $_POST["senha"];
        
            // Consulta SQL para verificar as credenciais
            $sql = "SELECT email, senha FROM cadastro WHERE email = '$email'";
        
            $result = $banco->query($sql);
        
        
        
            if ($result->num_rows > 0) {
                // Usuário encontrado, verificar a senha
                $row = $result->fetch_assoc();
                if ($senha === $row["senha"]) {
                    header("Location: ../front-end/home.html"); // Redirecionar para a página principal
                    echo "Senha CORRETA";
                } else {
                }
            } else {
                echo "E-mail não encontrado";
            }
        
            $banco->close();
        }
        
        ?>