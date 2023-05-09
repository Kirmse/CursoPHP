<?php 
function conectar($sql){
    $id = "";
    $senha = "";

    $hostweb = false; // false para usar o localhost, true para suar no 000webhost
    if($hostweb){
        $id = "id20607593_"; 
        $senha = "p?w1amR=B~*f{!&j";
    }

    $servidor = "localhost";
    $usuario = $id."root";
    $banco = $id."mydb";

    $con = new mysqli($servidor, $usuario, $senha, $banco);

    if($con->connect_error){
        die("Erro: ".$con->connect_error);
    }
    // if(str_contains($sql,"inset")){
    //     $con->query($sql);
    //     return $con->insert_id;
    // }
    return $con->query($sql);
}   

?>