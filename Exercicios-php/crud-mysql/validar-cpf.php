<?php 
$cpf = "11144477735";
validarCpf($cpf);

function validarCpf(){
    $cpf = str_split($cpf);
    validarDigito($cpf, 0);
    validarDigito($cpf, 1);
}
function validarDigito($cpf, $d){
    $cpf = str_split($cpf);
    $soma = 0;
    for ($i=0; $i <= (8 + $d); $i++) { 
        echo $i;
        echo " - ";
        echo (10 + $d)-$i;
        echo " = ";
        $soma += $cpf[$i] * ((10 + $d)-$i);
        echo $cpf[$i] * ((10 + $d)-$i);
        echo "<br>";
    }
    echo $soma;
    $digito = $soma % 11;
    if($digito >= 2){
        $digito = 11 - $digito;
    }else{
        $digito = 0;
    }
    echo "<br> Digito = ";
    echo $digito;
    echo "<br>";
    return $digito;
}
?>