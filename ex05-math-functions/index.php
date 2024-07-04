<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">

    <label>x:</label>
    <input type="text" name="x">

    <label>y:</label>
    <input type="text" name="y">

    <label>z:</label>
    <input type="text" name="z">

    <input type="submit" value="total">
   </form>
</body>
</html>

<?php
    $x = $_POST["x"]; // $x irá pegar o valor digitado dentro do input
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null; // $total não tem valor, definimos o valor de $total igual abs($x);

    //$total = abs($x);

    //$total = round($x); // Arredonda para cima. Ex: 8.80 = 9

    //$total = floor($x); // Arredonda o número para baixo. Ex: 4.99 = 4

    //$total = ceil($x); // Arredona para cima, mesmo que a diferença seja grande. Ex: 3.14 = 4

    //$total = sqrt($x); // Calcula a raíz quadrada, e retorna "NAN" para números negativos

    //$total = pow($x, $y); // Eleva a potência

    //$total = max($x, $y, $z); // Irá retornar o maior número digitado em um dos <input>

    //$total = min($x, $y, $z); // Irá retornar o menor número digitado em um dos <input>

    //$total = pi(); // Retorna o pi. Ex: 3.1415926535898

    //$total = rand(1, 6); // Gera números aleatorios definidos dentro dos ()




    echo $total; // O número que for digitado dentro do <input> irá aparecer na página
?>