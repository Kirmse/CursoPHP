<?php


session_start();
echo "ID do usuário: " . $_SESSION['id_usuario'];
if ($_SERVER['REQUEST_METHOD'] === 'post') {
    if (isset($_POST['conteudo'])) {
        $conteudo = $_POST['conteudo'];

        if (!empty($_SESSION['id_usuario'])) {
            $idUsuario = $_SESSION['id_usuario'];
            include "conectar.php";
            $sql = "insert into tarefa(id_usuario, conteudo) values('$idUsuario','$conteudo');";
            conectar($sql);
            echo "Gravado com sucesso!";
        } else {
            echo "ID do usuário não encontrado na sessão!";
        }
    } else {
        echo "O campo de anotação está vazio!";
    }
} else {
    echo "Metodo ultilizado inválido.";
}
