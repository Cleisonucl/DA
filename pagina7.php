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
    if ($idEscolha == "c") {

        echo "Parabéns Você Acertou!!!";
        echo '<br>';  echo '<br>';
        echo '<img  WIDTH="400PX" height="350PX"  src="imagens/VASO.jpg" alt="Jardinagem">';
        echo '<br>';
        echo "Essa e a imagem de onde devemos fazer as nossas necessidades fisiológicas.";

    } else {
        echo "Que pena,Você Errou";
        echo '<br>';  echo '<br>';
        echo '<img  WIDTH="400PX" height="350PX"  src="imagens/VASO.jpg" alt="Jardinagem">';
        echo '<br>';
        echo "Essa e a imagem de onde devemos fazer as nossas necessidades fisiológicas.";
    }


    ?>
</div>

<br>
<br>
        <a href="pagina8.html">
            <button id="botao">Próximo</button>
        </a>


</body>
</html>