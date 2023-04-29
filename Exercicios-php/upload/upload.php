<?php 
// onde os arquivos serão salvos
$pasta = "arquivos/";
$arquivo = $pasta.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));

// teste para saber se é uma imagem ou não
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {                                              // porque q só n coloca "==" invez de "!==" ??
        echo "É uma bela imagem kk <br>".$arquivo."<br>";
    }else {
        echo "Não é uma bela imagem...";
        $uploadOk = 0;
    }

    // teste se o arquivo já existe na pasta
    if (file_exists($arquivo)) {
        echo "Arquivo já existente tente renomear ou enviar outro belo arquivo.<br>";
        $uploadOk = 0;
    }

    // limitador de tamanho
    if ($_FILES["fileToUpload"]["size"]>500000) {
        echo "Seu arquivo é muito grande para ser belo!<br>";
        $uploadOk = 0;
    }

    // Verfica o tipo de imagem permitido
    if ($tipoArquivo != "jpg" && $tipoArquivo != "jpeg" && $tipoArquivo != "png" && $tipoArquivo != "gif") {
        echo "Tipo de arquivo não não é belo o suficiente!<br>";
        $uploadOk = 0;
    }

    // teste para tentar fazer o upload
    if ($uploadOk == 0) {
        echo "Voce não passou no teste de bela imagem... Tente novamente!";
    }else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$arquivo)) {
            echo "Ok ao fazer um belo upload ";
        }else {
            echo "Desculpe, erro inesperado ao fazer o belo upload.";
        }
    }
}


?>