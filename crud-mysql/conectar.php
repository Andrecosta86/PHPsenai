<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Banco de Dados</title>

    </head>
    <body>
       
      <?php
       // criando conexão com o servidor
// configuração para o servidor MySQL essa função retorna uma variável que tem acesso ao BD
function CONECTAR()
    {
      $servidor ="localhost";
      $usuario ="root";
      $senha ="";

      $con = new mysqli($servidor, $usuario, $senha, "myDB");
// teste de conexão com o servidor

    if ($con->connect_error){
        die ("connection failed: " . $con->connect_error);

    }
    echo "Connected successfully<br>";
    return $con; 
    }
    //Função para incluir uma nova pessoa no banco de dados
    function INCLUIR($nome, $email, $cpf){
        $con = CONECTAR();
        $sql = "insert into pessoas(nome, email, cpf) values ('$nome', '$email','$cpf')";
        if( $con->query($sql)===true){
            return "ok ao gravar";
        }else{
            return "Erro:$sql" .$con->error;
             }   
    }
//Buscar todas as pessoas que estão gravadas no no myDB
    function LISTAR(){
        $con = CONECTAR();
        $sql = "select id, nome, email, cpf from pessoas";
        $resultado = $con->query($sql);
        return $resultado;

    }

    function BUSCAR($id){
        $con = CONECTAR();
        $sql = "select id, nome, cpf from pessoas where id = $id";
        $resultado = $con ->query($sql);
        $resultado =$resultado->fetch_assoc();
        return $resultado;
        
    }

    function ALTERAR($id, $nome, $email, $cpf){
        $con = conectar();
        $sql = "UPDATE pessoas SET nome = '$nome', email = '$email', cpf ='$cpf' where id = $id";
        if($con->query($sql) === true){
            return "Ok ao Atualizar";
        }else{
            return "Erro: $sql".$con->error;
        }
    }
    
    function APAGAR($id){
        $con = conectar();
        $sql = "DELETE from pessoas where id = $id";
        if($con->query($sql) === true){
            return "Ok ao Apagar";
        }else{
            return "Erro: $sql".$con->error;
        }
    }


      ?>  

     
    </body>
    
 
</html>
