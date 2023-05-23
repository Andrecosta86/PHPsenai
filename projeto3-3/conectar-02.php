<?php
$servidor = 'localhost';
$usuario ='root';
$senha ='';
$banco ='projeto3';

$hostweb = false; // false para localhost, true para usar no 000webhost
if($hostweb){
    $id = "id20654171_";// id ou prefixo do 000webhost
    $senha ="!_1e3hLvto/[SA||";// senha do 000webhost
}
$con =new mysqli ($servidor, $usuario, $senha, $banco);
if ($con = new mysqli ($servidor, $usuario, $senha, $banco)){
    echo 'conectado';
    }
    else{
        //echo 'Deu ruim!';
    }



?>