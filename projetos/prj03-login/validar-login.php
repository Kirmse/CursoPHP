<?php
session_start();
$acesso = "";
if (isset($_POST["email"])) {
    include('conectar.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $retorno = conectar("select * from usuario where email = '$email' and senha = '$senha';");

    if ($linha = $retorno->fetch_assoc()) {
        $_SESSION['id_usuario'] = $linha['id'];
        $_SESSION['acesso-restrito'] = true;
        echo "<script>window.location.replace('admin.php');</script>";
    } else {
        $acesso = "Acesso Negado!";
    }
}
?>
