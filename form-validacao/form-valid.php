<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form boas vindas</title>
</head>

<body>
    <?php 
    $nome = $email = $idade = $genero = "";
    $nomeErr = $emailErr = $idadeErr = $generoErr ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nome = teste_input($_POST["nome"]);
        if(empty($nome)){
            $nomeErr = "Nome é obrigatório.";   
        }
        $email = teste_input($_POST["email"]);
        if(empty($email)){
            $emailErr = "E-mail é obrigatório."; 
        }
        $idade = teste_input($_POST["idade"]);

        if(empty($_POST["genero"])){
            $generoErr = "Genero é obrigatório."; 
        }else{
            $genero = teste_input($_POST["genero"]);
        }

     }
        function teste_input($dado)
        {
        $dado = htmlspecialchars($dado);
        $dado = trim($dado);
        $dado = stripslashes($dado);
        return $dado;
        }
    ?>
<h1>FORMULARIO COM VALIDAÇÃO</h1>
        <texto>*campos obrigatórios</texto><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Nome:<input type="text" name="nome" require> <span class="erro">*<?php echo $nomeErr;?></span><br><br>
            E-mail:<input type="email" name="email" require> <span class="erro">*<?php echo $emailErr;?></span><br><br>
            Idade:<input type="number" name="idade"><br><br>
            Genero:<span class="erro">*<?php echo $generoErr;?>
            <br>
            <br><input type="radio" name="genero" required value ="masculino">Masculino
            <br><input type="radio" name="genero" required value ="feminino">Feminino
            <br><input type="radio" name="genero" required value ="outros">Outros
            <br><input type="submit"><br>
        </form>
        <br>
        <?php
            
            

            if(!empty ($nome) && !empty($email) && !empty($genero))
            { echo"Informações gravadas com sucesso!<br>";
              echo"Nome: $nome <br>";
              echo"E-mail: $email<br>";
              echo "Idade: $idade<br>";
              echo "Genero: $genero<br>";
            

            }
        ?>
    
</body>
</html>