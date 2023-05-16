<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <style>
        a{
            float: right;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <br><h2>Cadastrar conta <a id="voltar" href="login.php" class="btn btn-outline-danger">Voltar</a></h2><br>
                <form action="criar-conta.php" method="post">
                    <div>
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Exemplo123@gmail.com" name="email">
                    </div><br>
                    <div>
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="****" name="senha">
                    </div><br>
                    <div>
                        <label for="confirmar" class="form-label">Confimar senha:</label>
                        <input type="password" class="form-control" id="confirmar" placeholder="****" name="confirmar">
                    </div><br>
        
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>