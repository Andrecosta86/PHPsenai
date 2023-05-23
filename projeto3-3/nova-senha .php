<?php 


if(isset($_POST['senha-atual'])){
    $email = $_SESSION['email'];
    $admin_id =$_SESSION['admin_id'];
    $senhaAtual=$_POST['senha-atual'];
    include('conectar.php');
    $sql = "SELECT * FROM usario WHERE email = '$email'";
    $resposta = conectar($sql);
    $linha = $resposta->fetch_assoc();
    if($senhaAtual == $linha['senha']){
        if($_POST['nova-senha'] == $_POST['confirmar-senha']){
        $novaSenha = $_POST['nova-senha'];
        $sql = "UPDATE usuario SET senha = $novaSenha WHERE id = $admin_id";
        CONECTAR($sql);
        $msg = "senha alterada com sucesso";
        }
        else {
            $msg = " nova senha e confirmar senha são diferentes";  
             }
    }else {
         $msg = "Senha atual invalida";  
            }     
}    
?>

