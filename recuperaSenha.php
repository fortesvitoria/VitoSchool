<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VitoSchool - Recuperar senha</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
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
        <div class="container-login container-centro">
            <h2>Recuperar Senha</h2>
            <form method="post" action="recuperarProcesso.php">

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit">Recuperar senha</button>
                <button type="submit"><a href="index.html">Cancelar</a></button>
            </form>
    </main>
    <footer>
        <p>&copy; 2023 Vitória Fortes. Todos os direitos reservados.</p>
    </footer>
    <script src="modo.js"></script>
</body>

</html>