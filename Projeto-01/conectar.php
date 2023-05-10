<?php
function conectar($sql){

    $id = "";
    $senha ="";
    

    $hostweb = false; // false para localhost, true para usar no 000webhost
    if($hostweb){
        $id = "id20654171_";// id ou prefixo do 000webhost
        $senha ="!_1e3hLvto/[SA||";// senha do 000webhost
    }


$servidor="localhost";
$usuario =$id."root";
$banco =$id."projeto01";

$con = new mysqli($servidor, $usuario, $senha, $banco);

if($con->connect_error){
    die("Erro:".$con->connect_error);

}
return $con->query($sql);
}
?>