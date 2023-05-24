<?php
session_start();
$acesso ="";
if(isset($_POST["email"])){
    include('conectar.php');
     
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $retorno = conectar("select * from usuario where email = '$email' and senha = '$senha';");
    if($linha = $retorno->fetch_assoc()){
        $_SESSION['id_usuario'] = $linha['id'];
        $_SESSION['acesso-restrito'] = true;
       // header("location: admin.php");
        echo "<script>window.location.replace('admin.php')</script>";
    }else{
        echo  "<script>alert('E-mail ou senha invalido');</script>";
        $acesso ="acesso negado.";
    }
}


?>