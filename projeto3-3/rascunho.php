<?php
// parte de update e delete estudando.
if(isset($_GET['editar'])){
    $id = $_GET['editar'];
}
if ($id !=""){
    $sql = "select * from tarefa where id = $id";
    $result = conectar($sql);
    $linha = $result ->fetch_assoc();
    $id  = $linha['id'];
    var_dump($id);
   var_dump($result);
}
if(isset($_GET['apagar'])){
    $id =$_GET['apagar'];
    $sql = "select * from tarefa where id = $id";
    $result = conectar($sql);
    $linha = $result-> fetch_assoc();
    $id = $linha['id'];
    $sql = "delete from produto WHERE id = $id";
   $result = conectar($sql);
    var_dump($result);

}


// editado para editar tarefa
if(isset($_GET['editar'])){
    $id = $_GET['editar'];
}
if ($id !=""){
    $sql = "select * from tarefa where id = $id";
    $result =mysqli_query($con, $sql);
    $linha = $result ->fetch_assoc();
    $dados = $linha['dados'];
   
}
if(isset($_GET['apagar'])){
    $id =$_GET['apagar'];
    $sql = "select * from tarefa where id = $id";
    $result =mysqli_query($con, $sql);
    $linha = $result-> fetch_assoc();
    $dados = $linha['dados'];
    $sql = "delete from tarefa WHERE id = $id";
   
  

}
// ULTIMA TENTATIVA
$id =$_GET['id'];
$sql = "SELECT * FROM tarefa WHERE '$id'";
$result =mysqli_query($con, $sql);
$linha = $result->fetch_assoc();
$fazer=$linha['fazer'];

//ultima da ultima tentativa
include("conectar.php");
if(!empty($_GET['id']))
$id =$_GET['id'];
$sql = "select * from tarefa where id='$id'";
$resultado = conectar($sql);
if($resultado->num_rows > 0)
while($linha = $resultado->fetch_assoc()){
$id = $linha ["id"];
$fazer = $linha['fazer'];
}
//else{
   // header('location:admin.php');
//}


// ultima da ultima da ultima
include ('conectar.php');
if(!empty($_GET['id'])){
    if(isset($_GET['editar'])){
        $id = $_GET['editar'];
    }

$sql = "select * from tarefa where id=$id";
$resultado =$conn->query($sql);
//$resultado = conectar($sql);
while($linha = $resultado ->fetch_assoc()){
$fazer = $linha['fazer'];
$id = $linha ["id"];
}}  



// não funcionou

if(isset($_GET['editar'])){
    $id = $_GET['editar'];

if ($id !=""){
    $sql = "select * from tarefa where id = $id";
    $result =mysqli_query($con, $sql);
    $scopo = $result ->fetch_assoc();
    $id = $scopo['id'];
   
}}
if(isset($_GET['apagar'])){
    $id =$_GET['apagar'];
    $sql = "select * from tarefa where id = $id";
    $result =mysqli_query($con, $sql);
    $scopo = $result-> fetch_assoc();
    $id = $scopo['id'];
    $sql = "delete from tarefa WHERE id = $id";
   
  

}

// mais um teste
include('conectar.php');
$id = $_GET['id']??'';
$sql ="SELECT * FROM tarefa WHERE id= $id";
$scopo=mysqli_query($con, $sql);
$resultado =$scopo->fetch_assoc();
$mysqli_result->$resultado;
$id =$resultado['id'];
// parte de cima do listar-tarefas.php
$sql = "select * from tarefa";
$resultado = conectar($sql);
while ($linha = $resultado->fetch_assoc()) {
$fazer = $linha['fazer'];
$id = $linha['id'];
}
?>