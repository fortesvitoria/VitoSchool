<!-- Área do professor -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VitoSchool - Editar perfil</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/editar-perfil.css">
    <link rel="shortcut icon" href="../assets/images/icone.png" type="image/x-icon">
</head>

<body>
    <header class="cabecalho">

        <nav class="cabecalho-menu">
            <div class="div-nav">
                <a href="../index.html"><img class="icone-nav" src="../assets/images/icone.png" alt="icone vs"></a>
            </div>
            <div>
                <a class="cabecalho-item" href="../front-end/home.php">Perfil</a>
                <a class="cabecalho-item" href="">Gerenciar meus conteúdos</a>
                <a class="cabecalho-item" href="../index.html">Sair</a>
            </div>
            <div class="modo">
                <button id="modoBtn" class="modo-btn">
                    <span class="icone-sol"><img src="../assets/images/sun.svg" alt="icone sol"></span>
                    <span class="icone-lua"><img src="../assets/images/moon.svg" alt="icone lua"></span></button>
            </div>
        </nav>


    </header>
    <main class="">
        <div class="container-perfil">
            <h2>Dados pessoais</h2>
            <div class="div-perfil">

                <form action="../codigosPHP/carregarImagem.php" method="post">
                    <label for="cpf">Digite o cpf da Imagem:</label>
                    <input type="text" cpf="cpf" name="cpf" required><br><br>

                    <input type="submit" value="Carregar Imagem">

                    <?php
                    // Verifica se o nome do usuário foi passado na URL
                    if (isset($_GET['nome'])) {
                        $nomeUsuario = $_GET['nome'];
                        echo "<h2>Bem-vindo(a), $nomeUsuario!</h2>";
                    } else {
                        echo "<h2>Não achou o nome!</h2>";
                    }
                    ?>
                </form>

                <form class="form-padrao" method="post" action="../codigosPHP/insereBlobBanco.php"
                    enctype="multipart/form-data">
                    <div class="div-perfil-foto container-perfil-home">
                        <img src="../assets/images/profesoraPerfil.jpg" alt="Imagem de perfil da professora"
                            class="imagemUsuario" name="imagemUsuario" id="imagemUsuario">
                    </div>

                    <label for="img-perfil">Trocar imagem de perfil:</label>
                    <input type="file" class="form-control" id="img-perfil" name="img-perfil" accept="image/*" required>

                    <!-- <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>

                    <label for="celular">Celular:</label>
                    <input type="tel" id="celular" name="celular" required>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required> -->


                    <label for="cpf">Para continuar digite seu CPF:</label>
                    <input type="text" id="cpf" name="cpf" required>

                    <button type="submit">Atualizar</button>
                    <button type="submit"><a href="index.html">Cancelar</a></button>
                </form>

            </div>


    </main>
    <footer>
        <p class="fonte-leve">&copy; 2023 Vitória Fortes. Todos os direitos reservados.</p>
    </footer>
    <script src="../js/modo.js"></script>
</body>

</html>