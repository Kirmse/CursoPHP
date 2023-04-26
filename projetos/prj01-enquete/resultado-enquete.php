<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Resultados</title>
</head>
<body>
    <?php 
    include "conectar.php";
    $id = 0; // porque igual a 0?
    if (isset($_GET['id-enquete'])) {
        $id = $_GET['id-enquete'];
        $retorno = conectar("select * from enquete where id = $id"); // como funciona esse paranteses? porque colocar o select dentro dele?
        $linha = $retorno->fetch_assoc(); // gostaria de saber melhor o que é "fetch_assoc()"
        $enquete = $linha['nome'];
    }
    ?>
    <div class="container">
        
        <br><h2><?php echo $enquete; ?> <a href='index.php' class='btn btn-secondary'>Voltar</a></h2><br>
        <table class="table table-hover table-striped">
            <tr>
                <th>Resposta</th>
                <th class="col-sm-2">Quantidade</th>
            </tr>
            <?php
            if ($id > 0) {
                $retorno = conectar("select * from resposta where id_enquete = $id;");
                while ($linha = $retorno->fetch_assoc()) {
                    $resposta = $linha['nome'];
                    $quantidade = $linha['quantidade'];
                    echo "<tr>
                    <td>$resposta</td>
                    <td>$quantidade</td>
                    </tr>";     
                }
            }
            ?>
        </table>
    </div>
</body>

</html>