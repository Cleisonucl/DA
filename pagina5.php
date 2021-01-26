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

        echo "Parabéns Você Acertou!!!";
        echo '<br>';  echo '<br>';
        echo '<img src="imagens/cama.png" alt="Jardinagem">';
        echo '<br>';
        echo "Isso e uma cama,utilizamos para dormir com conforto.";

    } else {
        echo "Que pena,Você Errou";
        echo '<br>';  echo '<br>';
        echo '<img src="imagens/cama.png" alt="Jardinagem">';
        echo '<br>';
        echo "Isso e uma cama,utilizamos para dormir com conforto.";
    }


    ?>
</div>
<br>
<br>
    <a href="pagina6.html">
        <button id="botao">Próximo</button>
    </a>

</body>
</html>