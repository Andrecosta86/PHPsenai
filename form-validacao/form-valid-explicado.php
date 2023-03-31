<!DOCTYPE html> <!-- define o tipo de documento como HTML -->
<html lang="pt-br"> <!-- define o idioma do documento como português brasileiro -->
<head>
    <meta charset="UTF-8"> <!-- define o conjunto de caracteres como UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- define o modo de compatibilidade com o Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- define as configurações da viewport -->
    <title>Form boas vindas</title> <!-- define o título da página -->
</head>

<body>
    <?php 
    $nome = $email = $idade = $genero = ""; // define as variáveis de cada campo como vazias
    $nomeErr = $emailErr = $idadeErr = $generoErr =""; // define as variáveis de erro como vazias

    if ($_SERVER["REQUEST_METHOD"] == "POST") // verifica se o formulário foi enviado
    {
        $nome = teste_input($_POST["nome"]); // define a variável $nome com o valor do campo "nome" enviado pelo formulário após ser validado pela função "teste_input"
        if(empty($nome)){ // verifica se o campo "nome" está vazio
            $nomeErr = "Nome é obrigatório.";   // define a variável $nomeErr com a mensagem de erro
        }
        $email = teste_input($_POST["email"]); // define a variável $email com o valor do campo "email" enviado pelo formulário após ser validado pela função "teste_input"
        if(empty($email)){ // verifica se o campo "email" está vazio
            $emailErr = "E-mail é obrigatório."; // define a variável $emailErr com a mensagem de erro
        }
        $idade = teste_input($_POST["idade"]); // define a variável $idade com o valor do campo "idade" enviado pelo formulário após ser validado pela função "teste_input"

        if(empty($_POST["genero"])){ // verifica se o campo "genero" está vazio
            $generoErr = "Genero é obrigatório."; // define a variável $generoErr com a mensagem de erro
        }else{
            $genero = teste_input($_POST["genero"]); // define a variável $genero com o valor do campo "genero" enviado pelo formulário após ser validado pela função "teste_input"
        }

     }
        function teste_input($dado) // define a função "teste_input" para limpar e validar os dados enviados pelo formulário
        {
        $dado = htmlspecialchars($dado); // converte caracteres especiais em entidades HTML
        $dado = trim($dado); // remove espaços em branco antes e depois do valor
        $dado = stripslashes($dado); // remove barras invertidas adicionadas por funções como addslashes()
        return $dado; // retorna o valor limpo e validado
        }
    ?>

<h1>FORMULARIO COM VALIDAÇÃO</h1>

<!-- Inicia um formulário que enviará os dados via método POST para a mesma página -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <!-- Cria um campo de entrada de texto para o nome, que é obrigatório e exibe uma mensagem de erro caso não seja preenchido -->
    Nome:<input type="text" name="nome" require> <span class="erro">*<?php echo $nomeErr;?></span><br>

    <!-- Cria um campo de entrada de e-mail, que é obrigatório e exibe uma mensagem de erro caso não seja preenchido -->
    E-mail:<input type="email" name="email" require> <span class="erro">*<?php echo $emailErr;?></span><br>

    <!-- Cria um campo de entrada numérica para a idade -->
    Idade:<input type="number" name="idade"><br>

    <!-- Cria um campo de seleção de gênero, que é obrigatório e exibe uma mensagem de erro caso não seja selecionado -->
    Genero:<span class="erro">*<?php echo $generoErr;?>
    <br>
    <!--Essa parte do código define três opções de seleção para o campo "gênero" do formulário, usando botões de rádio.-->
    <br><input type="radio" name="genero" required value ="masculino">Masculino
    <br><input type="radio" name="genero" required value ="feminino">Feminino
    <br><input type="radio" name="genero" required value ="outros">Outros

    <!-- Cria um botão de envio para o formulário -->
    <br><input type="submit">
</form>

<!-- Exibe os dados do formulário se o nome, e-mail e gênero foram preenchidos -->
<br>
<?php
if(!empty ($nome) && !empty($email) && !empty($genero))
{
    echo"Nome: $nome <br>";
    echo"E-mail: $email<br>";
    echo "Idade: $idade<br>";
    echo "Genero: $genero<br>";
}
?>
    
</body>
</html>