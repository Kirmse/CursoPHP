<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Criar enquete</title>
</head>
<body>
    <div class="container">
        <h2>Criar Nova Enquete <a href="index.php" class="btn btn-secondary">Voltar</a></h2> 
        <?php 
        if (isset($_GET['qt-opcoes'])) {
            include "form-nova-enquete.php";
        }elseif (isset($_GET['nome-enquete'])) {
            include "gravar-enquete.php";
        }else {
            include "form-pre-nova-enquete.php";
        }    // eu não entendi a lógica
        ?>
    </div>
</body>
</html>