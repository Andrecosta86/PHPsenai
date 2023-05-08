<?php
function conectar($sql){
    $id = "";
    $senha ="";
        

    $hostweb = false; // false para localhost, true para usar no 000webhost
    if($hostweb){
        $id = "id20711424_";// id ou prefixo do 000webhost
        $senha ="YHubTFp]\LUdc(&4";// senha do 000webhost
    }


    $servidor="localhost";
    $usuario =$id."root";
    //$banco =$id."projeto2";

    $con = new mysqli($servidor, $usuario, $senha, "projeto2");
   

    if($con->connect_error){
    die("Erro:".$con->connect_error);

    }
    return $con->query($sql);
   
} 
?>