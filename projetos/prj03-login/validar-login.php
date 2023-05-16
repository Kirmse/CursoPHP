<?php
session_start();
$acesso = "";
if (isset($_POST["email"])) {
    include('conectar.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $retorno = conectar("select * from usuario where email = '$email' and senha = '$senha';");

    if ($linha = $retorno->fetch_assoc()) {
        $senhaHash = $linha['senha'];
        if (password_verify($senha, $senhaHash)) {
            $_SESSION['acesso-restrito'] = true;
            echo "<script>window.location.replace('admin.php');</script>";
        } else {
            $acesso = "Acesso NeGaDo!";
        }
    } else {
        $acesso = "Acesso NeGaDo!";
    }
}
?>