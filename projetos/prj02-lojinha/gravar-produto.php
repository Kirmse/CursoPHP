<?php 
$tpMsg = $msg = $nome = $valor = $imagem = $id = $fileAtual = "";
$mostrarFileAtual = "hidden";

if(isset($_POST['submit'])){
    $id = $_POST["id"];
    $gravar = true;
 
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];

    if($nome == ""){
        $gravar = false;
        $msg .= "Necessário preencher o nome.<br>";
    }
    if($valor == ""){
        $gravar = false;
        $msg .= "Necessário preencher o valor.<br>";
    }

    $arquivo = "";
    $newFile = $_FILES["fileToUpload"]["name"];
    $fileAtual = $_POST["fileAtual"];
    if($newFile != "") {
        include('upload.php');
        if($uploadOk != 1) {
            $gravar = false;
        }
    }

    if($fileAtual != "" && $arquivo == ""){
        $arquivo = $fileAtual;
    }
    
    if($arquivo == "") {
        $msg .= "Necessário selecionar um arquivo.<br>";
        $gravar = false;
    }
 
    if($gravar) {
        if($id == ""){
            $sql = "insert into produto(nome, valor, imagem) values('$nome',$valor,'$arquivo')";
        }else {
            $sql = "update produto set nome = '$nome', valor = $valor, imagem = '$arquivo' where id = $id";
            if($fileAtual != "" && $arquivo != "" && $fileAtual != $arquivo) {
                unlink($fileAtual);
            }
        }

        conectar($sql);
        $msg = "Gravado com Sucesso.";
        $tpMsg = "success";
        $nome = $valor = $imagem = $id = $fileAtual = "";
    }else {
        $tpMsg = "danger";
    }
}

if (isset($_GET['editar'])) {
    $id = $_GET['editar'];
}

if($id != "") {
    $sql = "select * from produto where id = $id";
    $result = conectar($sql);
    $linha = $result->fetch_assoc();
    $nome = $linha["nome"];
    $valor = $linha["valor"];
    $imagem = $linha["imagem"];
    $mostrarFileAtual = "text";
}

if(isset($_GET['apagar'])) {
    $id = $_GET['apagar'];
    $sql = "select * from produto where id = $id";
    $result = conectar($sql);
    $linha = $result->fetch_assoc();
    $imagem = $linha["imagem"];
    unlink($imagem);
    $sql = "delete from produto where id = $id";
    $result = conectar($sql);
}
?> 