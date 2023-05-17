<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        #logout {
            float: right;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <br>
                <div class="text-center">
                    <h1>Anotações diárias <a id="logout" href="logout.php" class="btn btn-outline-danger">Sair</a></h1>
                </div>
                <br><br>
                <form action="admin.php" method="post" enctype="multipart/form-data">

                    <div class="input-group">
                        <button type="submit" class="input-group-text">Enviar</button>
                        <input type="text" name="conteudo" class="form-control" placeholder="Escreva aqui sua anotações!" id="conteudo">
                        <button class="btn btn-outline-success">Novo</button>
                    </div>
                </form>
            </div>
        </div>
        <br><br><br>
        <table class="table table-secondary table-hover">
            <tbody>
                <tr>
                    <th>Lista de anotações</th>
                    <th class="col-sm-1" colspan="2">Ações</th>
                </tr>
                <?php
                include "conectar.php";
                $retorno = conectar("select * from tarefa;");
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>