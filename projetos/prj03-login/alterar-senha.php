<?php
$msg = "";
$idUsuario = $_SESSION['id_usuario'];

if(isset($_POST['senha-submit'])) { // submit
    $id = $_SESSION['id_usuario'];
    echo $id;
    $msg = "Ok";

    if(isset($_POST['senha-atual'])){ // verificação de senha
        $senhaAtual = $_POST['senha-atual'];
        echo $senhaAtual;

        $sql = "select * from usuario where id = $id";
        $resultado = conectar($sql);
        $linha = $resultado->fetch_assoc();
        $id = $linha['id'];
        $senha = $linha['senha'];

        if($senha === $senhaAtual) {  // verificação de compatibilidade
            echo "Senha correta";

            if ($_POST['nova-senha'] == $_POST['confirmar-senha']){ // compatibilidade das senhas novas
                echo "As senhas são as mesmas";

                $senhaNova = $_POST['nova-senha'];
                $sql = "update usuario set senha = $senhaNova where id = $id"; // enviar
                conectar($sql);
            } else {
                echo "As senha não coincidem";
            }
        } else {
            echo "Senha incorreta!";
        }
    }

} else {
    $msg = "Não submit";
}
