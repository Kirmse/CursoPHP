<?php 
function conectar($sql){
    $id = "";
    $senha = "";

    $hostweb = false;
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
    
    $resultado = $con->query($sql);

    if(!$resultado) {
        die("Erro na consulta: ". $con->error);
    }

    $con->close();

    return $resultado; 

}
?>