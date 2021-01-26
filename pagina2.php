<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reconhecer</title>
    <link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
<div class="corpo">
    <?php

    $idEscolha = $_POST['escolha'];
    //echo $idEscolha;
    if ($idEscolha == "a") {
        echo "Parabéns Você Acertou!!!";
        echo '<br>';
        echo '<img src="imagens/carro.jpg" alt="Carro">';
        echo '<br>';
        echo "Isso e um carro,que tem como utilizade o transporte de pessoa e cargas.";

    } else {

        echo "Que pena,Você Errou";
        echo '<br>';
        echo '<img src="imagens/carro.jpg" alt="Carro">';
        echo '<br>';
        echo "Isso e um carro,que tem como utilizade o transporte de pessoa e cargas.";
    }


    //echo $idEscolha;
    if (isset($_POST['escolha']) === false) {
        // Executa o tratamento de quando não existir
        // pode ser uma mensagem informando que é obrigatório
        // selecionar uma opção.

        // echo "aqui";
    } else {
        // Executa o calculo quando existir
        //echo "n";
    } ?>
</div>

<br>
<br>

    <a href="pagina3.html">
        <button id="botao">Próximo</button>
    </a>

</body>
</html>