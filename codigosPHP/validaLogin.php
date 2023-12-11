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
    // $sql = "SELECT nome, email, senha FROM cadastro WHERE email = '$email'";
    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

    $result = $banco->query($sql);

    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
        $row = $result->fetch_assoc();
        $nomeUsuario = $row['nome'];
        // Redirecionar para a página de boas-vindas
        header("Location: ../front-end/home.php?nome=$nomeUsuario");
    } else {
        // Credenciais inválidas
        echo "Login falhou. Verifique seu email e senha.";
    }
    
    // Fechar a conexão com o banco de dados
    $banco->close();
}