<?php 
$id = $_GET['id-enquete'];
$sql = "select * from enquete where id = $id;";
$resultado = conectar($sql);
$enquete = "";
$linha = $resultado->fetch_assoc();
$enquete = $linha['nome'];

$sql = "select * from resposta where id_enquete = $id;";
$resultado = conectar($sql);
?>
<h2><?php echo $enquete;?> <a href="index.php" class="btn btn-secondary">Voltar</a></h2>
<form action="responder-enquete.php" method="POST"> <!-- Porque aqui teve q ser method post??? -->
    <?php 
    while ($linha = $resultado->fetch_assoc()) {
        $nome = $linha['nome'];
        $id = $linha['id'];
    
    ?>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio<?php echo $id?>" name="resposta" value="<?php echo $id;?>">
        <label class="form-check-label" for="radio<?php echo $id;?>"><?php echo $nome;?></label>
    </div>  
    <?php 
    } 
    ?>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

