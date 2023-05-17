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
                    <input type="hidden" name="id" value="">
                    <div class="input-group">
                        <button type="submit" class="input-group-text">Enviar</button>
                        <input type="text" name="conteudo" class="form-control" placeholder="Escreva aqui sua anotações!" id="conteudo">
                        <a class="btn btn-outline-success" href="admin.php">Novo</a>
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
                while ($linha = $retorno->fetch_assoc()) {
                    $id = $linha['id'];
                    $id_usuario = $linha['id_usuario'];
                    $conteudo = $linha['conteudo'];
                    echo "<tr>
                    <td >$conteudo</td>
                    <td class='text-center'><a href='admin.php?editar=$id'>🖋</a></td>
                    <td><a href='admin.php?apagar=$id'>🗑</a></td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>