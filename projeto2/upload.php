<?php
// onde os arquivos serão salvos
$pasta = "arquivos/";
$arquivo = $pasta.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
$msgUpload = "";

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        //echo " testando >>É uma imagem ".$arquivo;
    }else{
        $msgUpload = "Não é uma imagem!<br>";
        $uploadOk = 0;
    }

    // teste se o arquivo já existe na pasta
    if(file_exists($arquivo)){
        $msgUpload .= "Arquivo existente renomear ou enviar outro arquivo!<br>";
        $uploadOk = 1;// tirei de 0 para 1
    }

    // Verifica o tamanho do arquivo
    if($_FILES["fileToUpload"]["size"] >= 500000){
        $msgUpload .= "Arquivo maior que o permitido 500KB!<br>";
        $uploadOk = 0;
    }

    // Verifica o tipo de imagem permitido
    if($tipoArquivo != "jpg" && $tipoArquivo != "jpeg" && $tipoArquivo != "png" && $tipoArquivo != "gif"){
        $msgUpload .= "Arquivo inválido! validos:jpg, jpeg, png e gif.<br>";
        $uploadOk = 0;
    }

    if($uploadOk == 0){
        $msgUpload .= "Upload não permitido.";
    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$arquivo)){
            $msgUpload .= "Upload realizado.";
        }else{
            $msgUpload .="erro ao fazer o upload.";
        }
    }
    $msg = $msgUpload;
}

?>