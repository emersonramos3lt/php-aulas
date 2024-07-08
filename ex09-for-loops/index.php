<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="">Enter a number to count down from:</label>
    <input type="text" name="counter">
    <input type="submit" value="start">
    </form>
</body>
</html>


<?php
    // for loop = repeat some code a certain # of times

    $counter = $_POST["counter"];

    /*
    for ($i = $counter;$i > 0;$i--) {
        echo $i . "<br>";
    } // Começara a contagem do maior até o menor
    */

    for($i = 0;$i <= $counter; $i++) {
        echo $i . "<br>";
    } 
    // $i irá começar o loop em 0

    // Na tag <input> no HTML, é definido até que número o for loop irá acontecer

    // Usamos . no echo para separar 2 elementos








    /*
    for ($i = 1;$i <= 10;$i++) {
        echo $i . "<br>";
    } // echo irá mostrar o $i que irá ter uma contagem de 1 a 10

    // $i está definido começar em 1, você pode colocar qualquer número, para começar o loop a partir daquele número
    */




    /*
    for ($i = 0;$i < 5;$i++) {
        echo "Hello <br>";
    } // Irá mostrar a mensagem "Hello" 5 vezes.
    // $i = 0 Começara a contagem em zero
    // $i Vai maior do que 5
    // $i irá possibilitar o loop funcionar corretamente
    */

?>