<?php
    // Inclui o arquivo de conexão com o banco de dados
    include("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["img-perfil"]) && $_FILES["img-perfil"]["error"] == 0) {
            $cpf = $_POST["cpf"];
            $caminho_temporario = $_FILES["img-perfil"]["tmp_name"];

            // Lê o arquivo em formato binário
            $conteudo = addslashes(file_get_contents($caminho_temporario));

            $sql = mysqli_query($banco, "update cadastro set foto ='$conteudo' where cpf ='$cpf';");
            if ($sql) {
                echo "Imagem salva no banco de dados com sucesso.";
            } else {
                echo "Erro ao salvar a imagem no banco de dados: " . mysqli_error($banco);
            }
        } else {
            echo "Erro: Nenhum arquivo foi enviado ou ocorreu um erro no envio.";
        }
    }
?>