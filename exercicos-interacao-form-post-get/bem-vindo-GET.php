<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BOAS VINDAS</title>
    </head>
    <body>
        <h1>Exercício 06 - Interação entre FROM e PHP</h1><br>
        <p>Curso PHP da instituição Senai</p><br>

    <?php

    //PELO METODO GET, OS DADOS SÃO MOSTRADOS NA BARRA DE ENDERECOS.
    // DADOS LIMITADOS EM 2000 CARACTERES


    $nome = $_GET["nome"];
    $email =$_GET["email"];
    $idade =$_GET["idade"];

    echo "Bem Vindo ao mundo da programação em PHP: $nome <br>";
    echo "E-mail registrado com sucesso: $email <br>";
    echo "Sua idade é: $idade <br>";

    ?>
    <a href="bem-vindo2GET.html">VOLTAR</a>
</htmal>