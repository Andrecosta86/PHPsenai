<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="custumer.css">
        <title>Form Pessoas</title>
        
    </head>
    <body>
     <fieldset>  
    <div>
        <h1>Formulario Pessoas</h1><br>
        <div>
         <img src="https://static.portaldaindustria.com.br/static/img/logos/azul/SENAI-home.svg" 
        alt="Logo Senai"  height="50" width="200"/>   
                   
        </div>
        <text><strong>Curso PHP da instituição Senai</strong></text><br>
        <text><strong>Preencha os dasdos abaixo para efeituar o cadastro:</strong></text><br>
    </div>
     <?php
    include 'conectar.php';
    
   $id = $nome = $email = $cpf ="";
     if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(array_key_exists("id",$_GET)){
        $id = $_GET["id"];
        $pessoas = BUSCAR($id);
        $nome = $pessoas['nome'];
        $email = $pessoas['email'];
        $cpf = $pessoas['cpf'];
        }  
     }
     ?>
  
    <form action="form-pessoas.php" method="post">

       
            <strong>Nome:</strong><br>
            <input type="text" name="nome"value=" <?php echo $nome;?>"required><br>
            <strong>E-mail:</strong><br>
            <input type="email" name="email"value="<?php echo $email?>"required><br>
            <strong>CPF:</strong><br>
            <input type="text" name="cpf"value="<?php echo $cpf?>"required><br><br>
            <button class=botao type= submit> GRAVAR</button>
            <!-- Botão para um chamar a pagina com campos limpos -->
            <a href="form-pessoas.php"><input type= "button" value ="NOVO"> </a>
            <!-- Botão para apagar um dado somedo do id selecionado-->
            <?php echo 'onclick="window.location.replace(\'form-pessoa.php?apagar="';
    echo '$id\')"'; ?>
           
              


              
            
</fieldset>
             <!--  Genero:<br>
             <input type="radio" name="genero" required value ="masculino">Masculino
            <br><input type="radio" name="genero" required value ="feminino">Feminino
            <br><input type="radio" name="genero" required value ="outros">Outros
           
         <select sexo="Genero:<br>"required>
                <option selected disabled value="">Escolha</option>
                <option>Masculino</option>
                <option>Feminino</option>
                <option>Outros</option>
            </select><br><br>-->
            
    <fieldset class="tabela">   
    </form>
     
        <?php  
       
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        { 
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email =$_POST['email'];
        $cpf =$_POST['cpf'];
       
       // $genero=$_POST['genero'];

       if($id==''){
                    $msg =INCLUIR($nome, $email, $cpf);
                 } else{
                     $msg = ALTERAR($id, $nome, $email, $cpf);
                 }
        }echo"<br>";
        ?>  
    <table border "0.5">
    <tr>
      <th>ID</th>  
      <th>Nome</th> 
      <th>E-mail</th> 
      <th>CPF</th> 
      <!--<th>Genero</th>-->
    </tr>
<?php
$dados = LISTAR();
while($linha =$dados->fetch_assoc())
{
   
echo "<tr>";
echo "<td>" .$linha ['id']. "</td>";
echo "<td>" .$linha ['nome']. "</td>";
echo "<td>" .$linha ['email']. "</td>";
echo "<td>" .$linha ['cpf']. "</td>";
//echo "<td>" .$linha ['genero']. "</td>";
echo "<td><a href='form-pessoas.php?id=".$linha ['id']."'>Editar</a></td>";
echo "<td><a href='form-pessoa.php?apagar=".$linha['id']."'>Apagar</a></td>";
echo "</tr>";
}
?>
    </table>
</fieldset>      
</body>
   
 
</html>

