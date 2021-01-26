<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cores</title>
    <link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
<div class="corpo">
    <?php

    $idEscolha = $_POST['escolha'];
    //echo $idEscolha;
    if ($idEscolha == "d") {
        echo '<br>';
        echo "Parabéns Você Acertou!!!";
        echo '<br>';
        echo '<br>';
        echo '<img src="imagens/azul.jpg" alt="Cor Azul">';
        echo '<br>';
        echo "Essa e a cor AZUL";


    } else {
        echo "Que pena,Você Errou";
        echo '<br>';
        echo '<img src="imagens/azul.jpg" alt="Cor Azul">';
        echo '<br>';
        echo "Essa e a cor AZUL";

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
    <a href="pagina5.html">
        <button id="botao">Próximo</button>
    </a>

</body>
</html>