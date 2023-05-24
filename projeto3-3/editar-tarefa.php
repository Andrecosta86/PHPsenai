<?php
session_start();
$id_usuario = $_SESSION['id_usuario'];
include('conectar.php');
include('conectar-02.php');
//$id='';
$linha['id_apagar']='';
$linha['fazer']='';
$linha['id']='';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from tarefa where id=$id";
    $scopo = mysqli_query($con, $sql);
    $linha = mysqli_fetch_assoc($scopo);

 }
 if (isset($_POST['id'])){
    $id = $_POST['id'];
    $fazer = $_POST['fazer'];
    $sql = "UPDATE tarefa SET fazer = '$fazer' where id=$id";
    $scopo = mysqli_query($con, $sql);
     }
     if (isset($_GET['id_apagar'])){
        $id=$_GET['id_apagar'];
        $sql ="DELETE FROM tarefa WHERE id=$id";
        CONECTAR($sql);
        //echo  "<script>alert('deseja realmente apagar?');</script>";
        
     }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>gerenciador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <h2>Gerenciar Tarefas
                </h2>
                <form action="editar-tarefa.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
                    <div class="mb-3 mt-3">
                        <label for="tarefa" class="form-label"><strong>Tarefa:</strong></label>
                        <input type="text" class="form-control" name="fazer" value="<?php echo $linha['fazer'];?>">
                       
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Gravar</button>
                    <a href="admin.php" class="btn btn-success">Nova</a>
                    <a href="nova-senha.php" class="btn btn-info">Alterar Senha</a>
                    <a href="login.php" class="btn btn-danger">Sair</a>
                </form>
            </div>

        
        </div>
</div>

</body>
</html>
<?php
include ('listar-tarefas.php');
 ?>
 