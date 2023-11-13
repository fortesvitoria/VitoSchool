<?php
//configura a conexão
    $banco = mysqli_connect("localhost","root","Vi07MySQL@","vitoschool");

//testa se conexão funcionou
    if(!$banco) {
        echo "NÃO CONECTOU NO BANCO DE DADOS :(".mysqli_connect_error();
    } else {
        echo "CONECTOU :)";
    }

?>