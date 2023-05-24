<?php
include "validar-acesso.php";
include "conectar.php";
include "alterar-senha.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        #voltar {
            float: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <br>
                <h1>Alterar senha<a id="voltar" href="admin.php" class="btn btn-outline-danger">Voltar</a></h1>
                <h4><?php echo $msg;?></h4><br>
                <form action="form-alterar-senha.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="senha-atual" class="form-label">Senha atual:</label>
                        <input type="password" name="senha-atual" id="senha-atual" class="form-control" placeholder="***">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nova-senha" class="form-label">Nova senha:</label>
                        <input type="password" name="nova-senha" id="nova-senha" class="form-control" placeholder="*****">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="confirmar-senha" class="form-label">Confirmar senha:</label>
                        <input type="password" name="confirmar-senha" id="confirmar-senha" class="form-control" placeholder="*****">
                    </div>
                    
                    <button id="senha-submit" name="senha-submit" class="btn btn-success">Enviar</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>