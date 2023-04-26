<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responder Enquete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <?php 
        include "conectar.php";
        if (isset($_GET['id-enquete'])) {
            include "from-responder-enquete.php";
        }
        if (isset($_POST['resposta'])) {
            $id = $_POST['resposta'];
            $sql = "update respota set quantidade = quantidade + 1 where id = $id;";
            conectar($sql);
            echo "<h2>Respota computada <a href='index.php' class='btn btn-secondary'>Voltar</a></h2>";
        }

        ?>
    </div>
</body>
</html>