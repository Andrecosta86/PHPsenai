<?php 
$sql = "select * from tarefa";
$resultado = conectar($sql);
while ($linha = $resultado->fetch_assoc()) {
$fazer = $linha['fazer'];
$id = $linha['id'];
}


if(isset($_POST["submit"])){
 $id = $_POST["id"];
$fazer = $_POST["tarefa"];

 
       
//if($id ==""){

 $sql = "INSERT INTO tarefa(id, fazer) VALUES('$id','$fazer')";
conectar($sql); //  }
}
?>
