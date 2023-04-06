<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <color:red><title>Banco de Dados</title></color:red>

    </head>
    <body>
        <h1>conexão com o banco de dados Mysql</h1><br>
        <p>Curso PHP da instituição Senai</p><br>
      <?php 
      $servidor ="localhost";
      $usuario ="root";
      $senha ="";
// criando conexão com o servidor
      $con = new mysqli($servidor, $usuario, $senha, "myDB");
// teste de conexão com o servidor

    if ($con->connect_error){
        die ("connection failed: " . $con->connect_error);

    }
    echo "Connected successfully<br>"; 

    function incluir($nome, $email, $cpf){
        $sql = "insert into pessoas(nome, email, cpf) values ('$nome', '$email' ,'$cpf')";
        if( $con->query($sql)===true){
            return "ok ao gravar";
        }
        else{
            return "Erro: $sql" . $con->error;
        }
    }

      ?>  

     
    </body>
    
 
</html>
