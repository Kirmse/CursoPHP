<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pessoa</title>
</head>
<body>
<?php
include 'conectar.php';
include 'validar-cpf.php';
$msgCpf = $id = $nome = $email = $cpf = $sexo = $escolaridade=  "05987584108";
$email = "kirmse2005@gmail.com";
$id = "";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (array_key_exists('id',$_GET)){
        $id = $_GET['id'];
        $pessoa = buscar($id);
        $nome = $pessoa['nome'];
        $email = $pessoa['email'];
        $cpf = $pessoa['cpf'];
        $sexo = $pessoa['sexo'];
        $escolaridade = $pessoa['escolaridade'];
        
    }
    if (array_key_exists('apagar',$_GET)){
        $apagar = $_GET['apagar'];
        $msg = apagar($apagar);
        echo $msg;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $escolaridade = $_POST['escolaridade'];
    $id = $_POST['id'];
   
    
    if(validarCpf($cpf)){
        if($id == ''){
            $senha = $_POST['senha'];
            $confirmar = $_POST['confirmar'];
            if($senha == $confirmar){
                $msg = incluir($nome, $email, $cpf, $sexo, $escolaridade, $senha);   
            }else{
                $msg = "Senhas divergentes!";
            }
            
        } else {
            $msg = alterar($id, $nome, $email, $cpf, $sexo, $escolaridade);
        }
    }else{
        $msgCpf = "CPF inválido!";
    }
    
    echo $msg;
}

?>
<form action="form-pessoa.php" method="post">
    <input type="hidden" name="id"  value="<?php echo $id; ?>">
    
    <h1>Formulário de Pessoa</h1>
    
    <label>Nome: </label>
    <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $nome; ?>" required><br><br>
    
    <label>E-mail: </label>
    <input type="text" name="email" placeholder="@gmail.com" value="<?php echo $email; ?>" required><br><br>
    
    <label>CPF: </label>
    <input type="number" name="cpf" placeholder="000.000.000-00" value="<?php echo $cpf; ?>" required><br><br>
    
    <label>Escolaridade: </label>
    <select name="escolaridade">
        <option value="selecione">Selecione</option>
        <option <?php if($escolaridade == "ensino-fundamental") {echo "selected"; }?> value="ensino-fundamental">Ensino Fundamental</option>
        <option <?php if($escolaridade == "ensino-medio") {echo "selected"; }?> value="ensino-medio">Ensino Médio</option>
        <option <?php if($escolaridade == "superior-imcompleto") {echo "selected"; }?> value="superior-imcompleto">Superior Incompleto</option>
        <option <?php if($escolaridade == "superior-completo") {echo "selected"; }?> value="superior-completo">Superior Completo</option>
    </select><br><br>
    
    <label>Sexo: </label>
    <input type="radio" name="sexo" value="m" required<?php if($sexo == "m") echo "checked"; ?>>Masculino
    <input type="radio" name="sexo" value="f" required<?php if($sexo == "f") echo "checked"; ?>>Feminino
    <br><br>

     
    <?php if (!isset($_GET['id'])) { ?>
        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
    
        <label>Confirmar: </label>
        <input type="password" name="confirmar" placeholder="Confirmar" required><br><br>
    <?php } ?> 
    <input type="submit" value="Gravar">
    <a href="form-pessoa.php">
    <input type="button" value="Novo">
    </a>
    
</form>
    
<?php
    //<input type="button" value="Apagar" 
    //<?php echo 'onclick="window.location.replace(\'form-pessoa.php?apagar="';
    //echo '$id\')"';>
?>
<br>
<br>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>      
        <th>Sexo</th>
        
    </tr>
    <?php
    $dados = listar();
    while ($linha = $dados->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$linha['id']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['email']."</td>";
        echo "<td>".$linha['cpf']."</td>";
        echo "<td>".$linha['sexo']."</td>";
        echo "<td><a href='form-pessoa.php?id=".$linha['id']."'>Editar</a></td>";
        echo "<td><a href='form-pessoa.php?apagar=".$linha['id']."'>Apagar</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>