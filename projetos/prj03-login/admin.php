<?php
$conteudo = $id = "";
include "validar-acesso.php";
include "conectar.php";
include "alterar-senha.php";
include "gravar-tarefa.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>
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
        #alterar {
            float: left;
        }
        /* #table {
            background-color: black;
        } */
    </style>

<script>
    function confirmDelete(event) {
        event.preventDefault(); // Evita o redirecionamento imediato

        var confirmDelete = confirm("Tem certeza que deseja apagar?");

        if (!confirmDelete) {
            return;
        }

        window.location.href = event.target.href;
    }
</script>
 

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <br>
                <h1>
                    Anotações diárias
                    <a id="logout" href="logout.php" class="btn btn-outline-danger"> Sair</a> 
                    <a class="btn btn-outline-dark" href="form-alterar-senha.php" id="alterar"> Alterar senha</a>
                </h1>
                <h5><?php echo $msg;?></h5>
            </div>
            <div class="col-md-10">
                <br><br><br>
                <form action="admin.php" method="post" enctype="multipart/form-data">
                    <!-- id -->
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    
                    <div class="input-group">
                        <!-- Conteúdo -->
                        <input type="text" value="<?php echo $conteudo;?>" name="conteudo" class="form-control" placeholder="Escreva aqui sua anotações!" id="conteudo" required>
                        <!-- Enviar -->
                        <button type="submit" class="btn btn-outline-success" name="submit">Enviar</button>
                        <!-- Novo -->
                        <a class="btn btn-outline-primary" href="admin.php">Novo</a>
                    </div>
                </form>
            </div>
        </div>
        <br><br><br>
        <!-- Tabela -->
        <table class="table table-secondary table-hover">
            <tbody>
                <tr class="table-dark">
                    <th>Lista de anotações</th>
                    <th class="col-sm-1" colspan="2">Ações</th>
                </tr>
                <?php
                
                $sql = "select * from tarefa where id_usuario = $idUsuario;";
                $retorno = conectar($sql);
                while ($linha = $retorno->fetch_assoc()) {
                    $id = $linha['id'];
                    $conteudo = $linha['conteudo'];
                    echo "<tr>
                    <td >$conteudo</td>
                    <td><a href='admin.php?editar=$id'>🖋</a></td>
                    <td><a href='admin.php?apagar=$id' onclick='confirmDelete(event)'>🗑</a></td>  
                    </tr>";
                }                                                 
                ?>
            </tbody>
        </table>
    </div>   
</body>

</html>