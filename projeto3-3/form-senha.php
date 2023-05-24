<?php 


include('validar-acesso.php');
include('nova-senha.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Alterar Senha <a href="admin.php" class="btn btn-danger">Voltar</a> </h2>
               
                  <form action="form-senha.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="senha-atual" class="form-label">Senha Atual:</label>
                        <input type="password" class="form-control" id="senha-atual" placeholder="******" name="senha-atual" required>
                    </div>
                    <div class="mb-3">
                        <label for="nova-senha" class="form-label">Nova Senha:</label>
                        <input type="password" class="form-control" id="nova-senha" placeholder="******" name="nova-senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmar-senha" class="form-label">Nova Senha:</label>
                        <input type="password" class="form-control" id="confirmar-senha" placeholder="******" name="confirmar-senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                  </form>
                  <?php 
                  echo "$msg";
                  ?>
                  
        </div>
    </div>
</body> 
</html>
