<?php
include('conectar.php');
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // verificação de preenchimento dos campos
    if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['confirmar'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmar = $_POST['confirmar'];

        //verificação do email
        $sql = "select * from usuario where email = '$email';";
        $resultado = conectar($sql);
        if ($linha = $resultado->fetch_assoc()) {
            $msg = "Email já existe.";
        } else {
            // confirmação das senhas  
            if ($senha === $confirmar) {
                conectar("insert into usuario(email,senha) values('$email','$senha');");
                echo "<script>window.location.replace('login.php');</script>";
            } else {
                $msg = "As senhas não coincidem.";
            }
        }
    } else {
        $msg = "Preencha todas as colunas corretamente!";
    }
}
