    <?php

    //importa dos dados do banco com método include()
    include("conexao.php");

    //cria variáveis com valores digitados na interface (index.html)
    $nome  = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $curso = $_POST["opcaoCurso"];
    $senha = $_POST["senha"];

    //query do sql
    $sql = mysqli_query($banco, "insert into cadastro values(null, '$nome', '$sobrenome', '$cpf',  '$telefone',  '$celular',  '$email', '$curso',  '$senha', null);");

    if ($sql) {
        echo "<br>Cliente cadastrado :)";
    } else {
        echo "Não foi possível cadastrar o cliente :(" . mysqli_error($banco);
    }

    mysqli_close($banco);

    ?>
