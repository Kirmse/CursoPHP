<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Titulo da Aba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style> 
        /* tag style é um dos lugares para cogificar css */
        h1{
            color:white;
            background-color:antiquewhite;
            text-align: center;
        }
    </style>
    <style>
        h3{
            color: #e1d3c1;
            text-align: center;
        }
    </style>
    <h1 onclick="alert('Olá Mundo JS')">Minha página</h1>
    <script>
        document.write('Olá Mundo JS 2')
    </script>
    <?php
    echo "/ Olá Mundo PHP";
    ?>
    <div class="">
        <br><br>
        <h3>Primeiros testes</h3>
        
        <h4>Exemplo interacão Form PHP <a href="Exercicios-php/interacao-form-php/index.html"
        class="btn btn-outline-secondary btn-sm"> Click</a></h4>
        
        <h4>Exemplos das functions de String <a href="Exercicios-php/string-functions.php"
        class="btn btn-outline-secondary btn-sm"> Click</a></h4>
        
        <h4>Exemplos do formulário com validação <a href="Exercicios-php/interacao-form-php/form-com-validacao.php"
        class="btn btn-outline-secondary btn-sm" > Click</a></h4>


        <br><br>
        <h3>Sites com bootstrap</h3>

        <h4>Formulário Pessoa <a href="Exercicios-php\crud-mysql\form-pessoa.php"
        class="btn btn-outline-secondary btn-sm" > Click</a></h4>

        <h4>Upload de Imagens <a href="Exercicios-php\upload\index.php"
        class="btn btn-outline-secondary btn-sm" > Click</a></h4>


        <br><br>
        <h3>Projetos</h3>

        <h4>Projeto 01 <a href="projetos\prj01-enquete\index.php"
        class="btn btn-outline-secondary btn-sm" > Click</a></h4>
    </div>
</body>
</html>