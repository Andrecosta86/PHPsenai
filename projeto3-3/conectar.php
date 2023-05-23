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
function CONECTAR($sql){

    $id = "";
    $senha ="";
    

    $hostweb = false; // false para localhost, true para usar no 000webhost
    if($hostweb){
        $id = "id20654171_";// id ou prefixo do 000webhost
        $senha ="!_1e3hLvto/[SA||";// senha do 000webhost
    }


$servidor="localhost";
$usuario =$id."root";
$banco =$id."projeto3";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro:".$conn->connect_error);

}

return $conn->query($sql);
}echo "Conexão realizada";
?>  
</body>
    
 
</html>