<?php
session_start();

include("conectar.php");
    
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
    <?php 
    include('incluir-tarefa.php');
    
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <h2>Gerenciar Tarefas
                </h2>
                <form action="admin.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="">
                    <div class="mb-3 mt-3">
                        <label for="tarefa" class="form-label"><strong>Tarefa:</strong></label>
                        <input type="text-boxe" class="form-control" id="tarefa" name="tarefa" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Gravar</button>
                    <a href="admin.php" class="btn btn-success">Nova</a>
                    <a href="form-senha.php" class="btn btn-info">Alterar Senha</a>
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

 