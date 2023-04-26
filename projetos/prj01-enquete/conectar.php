<?php 

function conectar($sql){
    $id = "";
    $senha = "";
    
    $hostweb = false; // false para usar localhost, true para usar no 000webhost
    if ($hostweb) {
        $id = "id20607593_"; // id ou prefixo do 000webhost
        $senha = "p?w1amR=B~*f{!&j"; // senha do 000webhost
    }

    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb";

    $con = new mysqli($servidor, $usuario, $senha, $banco);

    if ($con->connect_error) {
        die("Erro: ".$con->connect_error);
    } 
    return $con->query($sql);
    
}
?>