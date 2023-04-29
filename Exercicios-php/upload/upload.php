<?php 
// onde os arquivos serão salvos
$pasta = "arquivos/";
$arquivo = $pasta.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));


if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {                                              // porque q só n coloca "==" invez de "!==" ??
        echo "É uma bela imagem kk <br>".$arquivo;
    }else {
        echo "Não é uma bela imagem...";
        $uploadOk = 0;
    }

    // teste se o arquivo já existe na pasta
    if (file_exists($arquivo)) {
        echo "Arquivo já existente tente renomear ou enviar outro.";
        $uploadOk = 0;
    }

    // limitador de tamanho
    if ($_FILES["fileToUpload"]["size"]>500000) {
        echo "Seu arquivo é muito grande!";
        $uploadOk = 0;
    }

    // Verfica o tipo de imagem permitido
    if ($tipoArquivo != "jpg" && $tipoArquivo != "jpeg" && $tipoArquivo != "png" && $tipoArquivo != "gif") {
        echo "Tipo de arquivo não permitido!<br>";
        $uploadOk = 0;
    }
}


?>