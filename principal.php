<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livro de Memorias</title>
    <link href="reset.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="stilo.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<div class="principal">
    <h1 style="color: black">Seja Bem Vindo </h1>
    <br>
    <p style="color: black">Hoje é:</p>
    <br>
    <p style="color: black"><?php
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d-m-Y H:i');
        echo $date;
        ?></p>
    
    
    <br>
    <img width="500px" src="imagens/brain.jpg">
    <br>
    <br>
    <a href="pagina2.html">
        <button id="botao">Exercitar</button>
    </a>
</div>
</body>
</html>