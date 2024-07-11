<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Enter a country</label>
    <input type="text" name="country">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    // associative array = An array made of key=>value pairs

    $capitals = array("USA"=>"Washington D.C.", "Japan"=>"kyoto", "South Korea"=>"Seoul", "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]]; // Irá pegar o valor digitado do país

    echo "The capital is {$capital}"; // Irá mostrar a capital
?>