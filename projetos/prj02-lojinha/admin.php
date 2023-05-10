<?php
include('validar-acesso.php');
include('conectar.php');
include('gravar-produto.php');
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
            <div class="col-md-6">
                <br>
                <h2>Cadastrar Produto</h2>

                <form action="admin.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3 mt-3"> <!--Nome -->
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="namespace" class="form-control" id="nome" placeholder="Ex: Batatinha Doce" name="nome" value="<?php echo $nome ?>">
                    </div>
                    <div class="mb-3 mt-3"> <!--Valor -->
                        <label for="valor" class="form-label">Valor:</label>
                        <input type="number" class="form-control" id="valor" placeholder="R$" name="valor" step="any" value="<?php echo $valor ?>">
                    </div>
                    <div class="mb-3 mt-3"> <!--Imagem -->
                        <label for="fileToUpload" class="form-label">Imagem:</label>
                        <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                        <input type="<?php echo $mostrarFileAtual ?>" class="form-control" id="fileAtual" name="fileAtual" value="<?php echo $imagem ?>">
                    </div>
                    <!--Botões -->
                    <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
                    <a href="admin.php" class="btn btn-success">Novo</a>
                    <a onclick="alert('Você foi deslogado!')" href="logout.php" class="btn btn-danger">Sair</a>
                </form><br>
                <?php
                if ($msg != "") {
                ?>
                    <br>
                    <div class="alert alert-<?php echo $tpMsg; ?> alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong><?php echo $msg; ?></strong>
                    </div>
            </div>
        <?php } ?>
        </div>

        <?php 
        include('listar-produto.php');
        ?>

    </div>
</body>

</html>