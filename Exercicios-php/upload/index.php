<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <br><h2>Selecione a imagem:</h2><br>
            <input type="file" name="fileToUpload" class="btn btn-outline-secondary"><br><br>
            <input type="submit" value="Enviar Imagem" class="btn btn-secondary" name="submit"><br>
        </form>
    </div>
</body>
</html>