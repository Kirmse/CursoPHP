<?php
include('conectar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <style>
        #voltar{
            float: right;
        }
    </style>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <br><h2>Cadastrar conta <a id="voltar" href="login.php" class="btn btn-outline-danger">Voltar</a></h2><br>
                <form action="criar-conta.php" method="post">
                    <div>
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Exemplo123@gmail.com" name="email" required>
                    </div><br>
                    <div>
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="****" name="senha" required>
                    </div><br>
                    <div>
                        <label for="confirmar" class="form-label">Confimar senha:</label>
                        <input type="password" class="form-control" id="confirmar" placeholder="****" name="confirmar" required>
                    </div><br>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

<?php 

 
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // verificação de preenchimento dos campos
    if(isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['confirmar'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmar = $_POST['confirmar'];

        if($senha === $confirmar) {
            conectar("insert into usuario(email,senha) values('$email','$senha');");
            
            echo "<script>window.location.replace('login.php');</script>";
            $acesso = "Cadastrado com sucesso!";
        }else {
            $error = "As senhas não coincidem.";
            
        }
    }
}
?>