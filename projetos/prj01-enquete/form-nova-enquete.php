<form action="criar-enquete.php" method="GET"> <!-- o action direciona para onde vai ser enviado as informações preenchidas no formulário -->
    <label for="nome-enquete" class="form-label">Qual o nome da enquete?</label>
    <input type="text" class="form-control" id="nome-enquete" name="nome-enquete" value="Nova enquete"></label>
    
    <label for="nome-enquete" class="form-label">Quais as opçoes da enquete?</label>
    <?php 
        $qtOpcoes = $_GET['qt-opcoes'];
        for ($i=0; $i < $qtOpcoes; $i++) { 
            echo "<input type='text' class='form-control' name='opcao[]' value='Opção $i'><br>";
        }
    ?>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>