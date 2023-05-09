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
                <br>
                <h2>Cadastrar Produto</h2>
                <form action="cadastro.php" method="post">
                    <div>
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="namespace" class="form-control" id="nome" placeholder="Ex: Batatinha Doce" name="nome"><br>
                    </div>
                    <div>
                        <label for="valor" class="form-label">Valor:</label>
                        <input type="number" class="form-control" id="valor" placeholder="R$" name="valor"><br>
                    </div>
                    <div>
                        <label for="imagem" class="form-label">Imagem:</label>
                        <input class="form-control" type="file" name="imagem" id="imagem"><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="submit" class="btn btn-primary">Novo</button>
                    <button type="submit" class="btn btn-danger">Sair</button>
                </form><br>

            </div>
            <div class="col-10">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="col-1">Imagem</th>
                            <th class="col-1">Valor</th>
                            <th class="col-1">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>aaa</td>
                            <td>aaa</td>
                            <td>aaa</td>
                            <td>aaa</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>