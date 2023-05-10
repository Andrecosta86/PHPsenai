<?php
$tpMsg = $msg = $nome = $valor =$imagem = $id = $fileAtual = "";
$mostrarFileAtual = "hidden";

if(isset($_POST["submit"])){
$id = $_POST["id"];
$gravar =true;


$nome = $_POST["nome"];
$valor = $_POST["valor"];


    if($nome == ""){
        $gravar = false;
        $msg .= "Preenchar o nome .<br>";
        }
    if($valor == ""){
        $gravar =false;
        $msg .= "Preenchar o valor .<br>";
        }

    $arquivo ="";
    $newFile = $_FILES["fileToUpload"]["name"];
    $fileAtual = $_POST["fileAtual"];
    //$uploadOK=1;
    if($newFile != ""){
       include ("upload.php");
       if($uploadOK !=1){
      $gravar =false;

      }
   }
    if($fileAtual != "" && $arquivo ==""){
        $arquivo = $fileAtual;
    }
    if($arquivo == ""){
        $msg.= "selecione um arquivo.<br>";
        $gravar =false;
    }
    if($gravar){
        
        if($id ==""){
            $sql = "INSERT INTO produto(nome, valor, imagem) VALUES('$nome', $valor,'$arquivo')";
            
        } else {
            $sql = "UPDATE produto SET nome = '$nome', valor = '$valor', imagem ='$arquivo' where id = $id";
            if ($fileAtual != "" && $arquivo != "" && $fileAtual != $arquivo){
                unlink($fileAtual);
            }
        }
        conectar($sql);
        $msg = "Sucesso ao Gravar";
        $tpMsg = "success";
        $nome = $valor = $imagem = $id = $fileAtual = "";
    } else{
        $tpMsg = "danger";

    }
  
}  

if(isset($_GET['editar'])){
    $id = $_GET['editar'];
}
if ($id !=""){
    $sql = "select * from produto where id = $id";
    $result = conectar($sql);
    $linha = $result ->fetch_assoc();
    $nome = $linha['nome'];
    $valor =$linha['valor'];
    $imagem =$linha['imagem'];
    $mostrarFileAtual = "text";
}
if(isset($_GET['apagar'])){
    $id =$_GET['apagar'];
    $sql = "select * from produto where id = $id";
    $result = conectar($sql);
    $linha = $result-> fetch_assoc();
    $imagem = $linha['imagem'];
    unlink($imagem);
    $sql = "delete from produto WHERE id = $id";
   $result = conectar($sql);
  

}


?>