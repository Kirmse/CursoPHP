<?php 
// onde os arquivos serão salvos
$pasta = "arquivos/";
$arquivo = $pasta.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
$msgUpload = "";

// test de imagem
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        // echo "Imagem válida.<br>".$arquivo."<br>";
    }else {
        $msgUpload .= "Imagem Inválida!";
        $uploadOk = 0;
    }

    // teste se o arquivo já existe na pasta
    if (file_exists($arquivo)) {
        $msgUpload .= "Arquivo já existente tente renomear ou enviar outro aquivo.<br>";
        $uploadOk = 0;
    }

    // limitador de tamanho
    if($_FILES["fileToUpload"]["size"]>500000) {
        $msgUpload .= "Seu arquivo é muito grande, supera o tamanho de 500KB!<br>";
        $uploadOk = 0;
    }

    // Verificar o tipo de imagem permitido
    if ($tipoArquivo != "jpg" && $tipoArquivo != "jpeg" && $tipoArquivo != "png" && $tipoArquivo != "gif") {
        $msgUpload .= "Tipo de arquivo incompativel.<br>";
        $uploadOk;
    }

    // teste para tentar fazer o upload
    if($uploadOk == 0) {
        $msgUpload .= "Deculpe, não foi possivel fazer o upload. Tente novamente!<br>";
    }else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$arquivo)) {
            // echo "Ok ao fazer o upload.";
        }else {
            $msgUpload .= "Desculpe, erro inesperado ao fazer oo upload.";
        }
    }
    $msg = $msgUpload;
}
?>