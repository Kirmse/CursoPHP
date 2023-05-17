<?php
include('validar-login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <br>
                <h2>Login
                    <h5><?php echo $acesso; ?></h5>
                </h2><br>
                <form action="login.php" method="post">
                    <!-- Email -->
                    <label for="email" class="form-label">Email:</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" placeholder="Seu email" name="email" required>
                        <span class="input-group-text">@exemplo.com</span>
                    </div>
                    <!-- Senha -->
                    <div><br>
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="****" name="senha" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="criar-conta.php" class="btn btn-outline-primary">Criar Conta</a>

                </form>
            </div>
        </div>
    </div>
</body>

</html>