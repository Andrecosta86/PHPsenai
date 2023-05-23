<!DOCTYPE html>
<html>

<head>
    <title>criar conta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <br><br><br>
                <h2>Criar nova conta</h2>
                
                <form action="criar-conta.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="******" name="senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmar" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="confirmar" placeholder="******" name="confirmar" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Gravar</button>
                    <a href="login.php" class="btn btn-primary">Voltar</a>

                </form>
            </div>
        </div>
    </div>
</body> 
 
</html>