<?php
    include "conectar.php";
    $enquete = $_GET['nome-enquete'];
    $opcoes = $_GET['opcao'];
    
    $sql = "inset into enquete(nome) values ('$enquete')";
    conectar($sql);
    $sql = "select id from enquete where nome = '$enquete';";
    $retorno = conectar($sql);
    $l = $retorno->fetch_assoc();
    $id = $l['id'];
    foreach ($opcoes as $o) {
        $sql = "insert into resposta(id_enquete,nome,quantidade) values($id,'$o',0);";
        conectar($sql);
    }
?>