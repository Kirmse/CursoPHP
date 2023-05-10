<?php 
include('validar-login.php');
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
                <h2>Login 
                    <h5><?php echo $acesso; ?></h5>
                </h2>
                <form action="login.php" method="post">
                    <div>
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="@gmail.com" name="email">
                    </div>
                    <div>
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" name="senha">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a type="submit" class="btn btn-secondary" href="index.php">Acessar Loja</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>