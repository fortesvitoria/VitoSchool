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
                <form class="form-padrao" method="post" action="../codigosPHP/insereBlobBanco.php" enctype="multipart/form-data">
                    <div class="div-perfil-foto container-perfil-home">
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

                    <label for="imagem">Trocar imagem de perfil:</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>


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