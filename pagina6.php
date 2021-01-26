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
    if ($idEscolha == "b") {

        echo "Parabéns Você Acertou!!!";
        echo '<br>';  echo '<br>';
        echo '<img WIDTH="400PX" height="350PX" src="imagens/real.jpg" alt="Jardinagem">';
        echo '<br>';
        echo "Essa e a moeda Real(R$) que e utilizada por nos no Brasil.";

    } else {
        echo "Que pena,Você Errou";
        echo '<br>';  echo '<br>';
        echo '<img WIDTH="400PX" height="350PX" src="imagens/real.jpg" alt="Jardinagem">';
        echo '<br>';
        echo "Essa e a moeda Real(R$) que e utilizada por nos no Brasil.";
    }


    //echo $idEscolha;
     ?>
</div>
<br>
<br>
    <a href="pagina7.html">
        <button id="botao">Próximo</button>
    </a>

</body>
</html>