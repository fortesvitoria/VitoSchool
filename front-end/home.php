<!-- Área do professor -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VitoSchool - Home</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="shortcut icon" href="../assets/images/icone.png" type="image/x-icon">
</head>

<body>
    <nav class="cabecalho-menu">
        <div class="div-nav">
            <a href="../index.html"><img class="icone-nav" src="../assets/images/icone.png" alt="icone vs"></a>
        </div>
        <div>
            <a class="cabecalho-item" href="editarPerfil.php">Editar perfil</a>
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
        <div class="container-perfil-home">
                    <!-- <?php
                    // Verifica se o nome do usuário foi passado na URL
                    if (isset($_GET['nome'])) {
                        $nomeUsuario = $_GET['nome'];
                        echo "<h2>Bem-vindo(a), $nomeUsuario!</h2>";
                    } else {
                        echo "<h2>Não achou o nome!</h2>";
                    }
                    ?> -->
            <div class="div-perfil">
                <div class="div-perfil-foto">
                <?php
                include("../codigosPHP/conexao.php");
                session_start();
                $section = $_SESSION['CPF'];
                //echo $section;

                $verificaFoto = mysqli_query($banco, "SELECT foto FROM cadastro WHERE cpf = '$section'");

                if (!$verificaFoto) {
                    // Se houver um erro na consulta
                    echo "Erro na consulta: " . mysqli_error($banco);
                } else {
                    if (mysqli_num_rows($verificaFoto) > 0) {
                        // Se houver resultados
                        $dadosFoto = mysqli_fetch_assoc($verificaFoto);
                        $foto = $dadosFoto['foto'];
                        // Verificar se a foto é NULL
                        if (is_null($foto)) {
                            // Se for NULL, exibir uma imagem padrão
                            echo '<img src="../assets/images/profesoraPerfil.jpg" alt="Imagem de perfil da professora" class="imagemUsuario" name="imagemUsuario" id="imagemUsuario">';
                        } else {
                             // Se não for NULL, mostrar a imagem do banco de dados
                            $base64 = base64_encode($foto); // Convertendo o BLOB para base64
                            $imagemData = 'data:image/jpeg;base64,' . $base64; // Criando a URL base64 para a imagem
                            echo '<img src="' . $imagemData . '" alt="Imagem de perfil" class="imagemUsuario" name="imagemUsuario" id="imagemUsuario">';
        
                        }
                    } else {
                        // Se não houver resultados para o CPF especificado
                        echo '<img src="../assets/images/profesoraPerfil.jpg" alt="Imagem de perfil da professora" class="imagemUsuario" name="imagemUsuario" id="imagemUsuario">';
                    }
                }
                mysqli_close($banco);
                ?>
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

            <div class="menu-home">
                <button type="button"><a href="">Temas de estudos</a></button>
                <button type="button"><a href="materiais.html">Materiais</a></button>
                <button type="button"><a href="">Usuários</a></button>
                <button type="button"><a href="">Bate-papo</a></button>
            </div>

            <span><img src="../assets/images/linha-horizontal-laranja.png" alt="linha horinzontal laranja" class="linha-horizontal-laranja"></span>

            <div class="div-professores">
                <img src="../assets/images/professor1.jpg" alt="Imagem de um professor(a)" class="imagemProfessor" name="imagemProfessor" id="imagemProfessor">
                <img src="../assets/images/professor2.jpg" alt="Imagem de um professor(a)" class="imagemProfessor" name="imagemProfessor" id="imagemProfessor">
                <img src="../assets/images/professor3.jpg" alt="Imagem de um professor(a)" class="imagemProfessor" name="imagemProfessor" id="imagemProfessor">
                <img src="../assets/images/professor4.jpg" alt="Imagem de um professor(a)" class="imagemProfessor" name="imagemProfessor" id="imagemProfessor">
                <img src="../assets/images/professor5.jpg" alt="Imagem de um professor(a)" class="imagemProfessor" name="imagemProfessor" id="imagemProfessor">

            </div>


    </main>
    <footer>
        <p class="fonte-leve">&copy; 2023 Vitória Fortes. Todos os direitos reservados.</p>
    </footer>
    <script src="../js/modo.js"></script>
</body>

</html>