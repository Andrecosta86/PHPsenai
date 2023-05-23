<!DOCTYPE html>
<html>

<head>
    <title>conta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
               <?php 
               include ('conectar-02.php');
               $email =$_POST['email'];
               $senha =$_POST['senha'];

              $sql = "INSERT INTO usuario(email, senha)
                       VALUES ('$email', '$senha')";
                if(mysqli_query($con, $sql)){
                    echo"Usuario cadastrado com sucesso!";
                    
                } else {
                    echo "Deu ruim!"; var_dump($sql);
                }
            
               ?> 
               <a href="login.php" class="btn btn-primary">Fazer Login</a>
            </div>
        </div>
    </div>
</body> 
 
</html>