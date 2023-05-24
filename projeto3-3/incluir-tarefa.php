<?php 
$sql = "select * from tarefa";
$resultado = conectar($sql);
while ($linha = $resultado->fetch_assoc()) {
$fazer = $linha['fazer'];
$id = $linha['id'];
}

$id_usuario=$_SESSION['id_usuario'];
if(isset($_POST["submit"])){
 $id = $_POST["id"];
$fazer = $_POST["tarefa"];

 
       
//if($id ==""){

 $sql = "INSERT INTO tarefa(id_usuario, fazer) VALUES('$id_usuario','$fazer')";
conectar($sql); //  }
}
?>
