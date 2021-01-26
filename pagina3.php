<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nome e Idade</title>
    <link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
<div class="corpo">
    <?php htmlspecialchars($_POST['name']);
    $nome = $_POST['name'];
    $idade = (int)$_POST['age'];



    echo '<br>';echo '<br>';
        echo "Olá " . $nome. "\n";
        echo '<br>';
        echo "Você tem " . $idade . " anos.";
    echo '<br>';
    echo '<img WIDTH="400PX" height="350PX" src="imagens/vo.jpg" alt="Jardinagem">';

?>
</div>
<br>
<br>
    <a href="pagina4.html">
        <button id="botao">Próximo</button>
    </a>

</body>
</html>



