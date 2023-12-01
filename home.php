<!-- Área do professor -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VitoSchool - LogIn</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/home.css">
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
    <main class="">
        <div class="container-perfil">
            <h2>Bem vindo <span class="nome" id="nome" name="nome">USUARIO</span>!</h2>
            <div class="div-perfil">
                <div class="div-perfil-foto">
                    <form method="post" action="cadastrar.php">
                        <img src="assets/images/profesoraPerfil.jpg" alt="Imagem de perfil da professora"
                            class="imagemUsuario" name="imagemUsuario" id="imagemUsuario">
                </div>
                <div class="div-perfil-label">
                    <label for="selecao">Minhas turmas:</label>
                    <div class="div-perfil-texto">
                        <select id="selecao" name="opcaoCurso">
                            <option value="Análise e desenvolvimento de sistemas">ADS NOITE 01/2023</option>
                            <option value="Sistemas para internet">ADS TARDE 01/2023</option>
                            <option value="Banco de dados com PHP">BANCO/PHP NOITE 01/2023</option>
                        </select>
                    </div>
                </div>
            </div>
            </form>

            <div class="menu-home">
                <button type="button"><a href="">Temas de estudos</a></button>
                <button type="button"><a href="">Materiais</a></button>
                <button type="button"><a href="">Usuários</a></button>
                <button type="button"><a href="">Bate-papo</a></button>
            </div>

            <span><img src="assets/images/linha-horizontal-laranja.png" alt="linha horinzontal laranja"
                    class="linha-horizontal-laranja"></span>

            <div class="div-professores">
                <img src="assets/images/professor1.jpg" alt="Imagem de um professor(a)" class="imagemProfessor"
                    name="imagemProfessor" id="imagemProfessor">
                <img src="assets/images/professor2.jpg" alt="Imagem de um professor(a)" class="imagemProfessor"
                    name="imagemProfessor" id="imagemProfessor">
                <img src="assets/images/professor3.jpg" alt="Imagem de um professor(a)" class="imagemProfessor"
                    name="imagemProfessor" id="imagemProfessor">
                <img src="assets/images/professor4.jpg" alt="Imagem de um professor(a)" class="imagemProfessor"
                    name="imagemProfessor" id="imagemProfessor">
                <img src="assets/images/professor5.jpg" alt="Imagem de um professor(a)" class="imagemProfessor"
                    name="imagemProfessor" id="imagemProfessor">

            </div>


    </main>
    <footer>
        <p class="fonte-leve">&copy; 2023 Vitória Fortes. Todos os direitos reservados.</p>
    </footer>
    <script src="modo.js"></script>
</body>

</html>