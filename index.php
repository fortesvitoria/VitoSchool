<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VitoSchool - LogIn</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="shortcut icon" href="assets/images/icone.png" type="image/x-icon">
</head>

<body>
    <header class="cabecalho">
        <div class="modo">
            <button id="modoBtn" class="modo-btn">
            <span class="icone-sol"><img src="assets/images/sun.svg" alt="icone sol"></span>
            <span class="icone-lua"><img src="assets/images/moon.svg" alt="icone lua"></span></button>
        </div>
        <div class="container-logo">
            <a href="index.html"><img src="assets/images/logo.png" alt="imagem com o nome VitoSchool"></a>
        </div>

    </header>
    <main>
        <div class="container-login">
            <h2>Login</h2>
            <form method="post" action="autenticaLogin.php">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <button type="submit">Login</button>
            </form>

            <p><a href="recuperaSenha.php">Esqueceu sua senha?</a></p>
        </div>
        <div>
            <span class="linha-vertical-laranja"><img src="assets/images/linha-vertical-laranja.png" alt=""></span>
        </div>
        <div class="container-login">
            <div class="container-info">
                <img src="assets/images/estudante.png" alt="imagem de uma estudante com livros">
                <p>Transformando ideias em inovação. Conectamos sonhos à realidade por meio de soluções tecnológicas
                    criativas e estratégicas. Seja bem-vindo ao futuro da inovação.</p>
                    <button type="button"><a href="cadastro.html">Cadastre-se</a></button>
            </div>
        </div>        
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
                    header("Location: home.php"); // Redirecionar para a página principal
                    echo "Senha CORRETA";
                } else {
                }
            } else {
                echo "E-mail não encontrado";
            }
        
            $banco->close();
        }
        
        ?>
    </main>
    <footer>
        <p>&copy; 2023 Vitória Fortes. Todos os direitos reservados.</p>
    </footer>
    <script src="modo.js"></script>
</body>

</html>