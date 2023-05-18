<?php
// session_start();
$idUsuario = $_SESSION['id_usuario'];
echo "ID do usuário: " . $_SESSION['id_usuario'] . "<br>";

if (isset($_POST['submit'])) {  // submit
    echo "Submit clicado <br>";

    if (isset($_POST['conteudo'])) { // conteúdo
        $conteudo = $_POST['conteudo'];
        echo "Conteudo ok <br>";

        if (!empty($_SESSION['id_usuario'])) {  // id_usurario
            $idUsuario = $_SESSION['id_usuario'];
            echo "ID do usuário: " . $_SESSION['id_usuario'] . "<br>";

            // include_once "conectar.php";
            $sql = "insert into tarefa(conteudo,id_usuario) values('$conteudo',$idUsuario);";  // Insert
            conectar($sql);

            echo "<a href='admin.php'>Tudo certo!</a>";
        } else {
            echo "Não achei nenhum ID <br>";
        }
    } else {
        echo "Conteudo não ok <br>";
    }
} else {
    echo "Botão não foi clicado <br>";
}

if (isset($_GET['editar'])) {  // editar
    $id = $_GET['editar'];


    if ($id != "") {  // editar            fala que não indentifica a função conectar()
        $sql = "select * from tarefa where id = $id;";
        $resultado = conectar($sql);
        if ($resultado === false) {
            die("Erro ao executar a consulta: " . $con->error);
        }
        $linha = $resultado->fetch_assoc();
        $conteudo = $linha["conteudo"];
        
    }
}
if (isset($_GET['apagar'])) {
    $id = $_GET['apagar'];
    $sql = "delete from tarefa where id = $id;";
    $resultado = conectar($sql);
    if ($resultado === false) {
        die("Erro ao executar a consulta: " . $con->error);
    }
}
