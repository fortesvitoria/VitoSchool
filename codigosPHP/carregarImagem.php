<?php
// Inclui o arquivo de conexão com o banco de dados
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];

    $query = "SELECT foto FROM cadastro WHERE cpf = $cpf";
    $resultado = mysqli_query($banco, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $imagem_binaria = $row['foto'];

        // Define os headers para indicar que é uma imagem
        header("Content-type: image/jpeg"); // Substitua por mime type adequado se necessário
        echo $imagem_binaria; // Exibe a imagem diretamente na tela
    } else {
        echo "Imagem não encontrada.";
    }
}
?>  
