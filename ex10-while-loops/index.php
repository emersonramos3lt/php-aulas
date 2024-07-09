<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // while loop = do some code infinitely while some condition remains true

    $seconds = 0;
    $running = true;

    while($running) {

        if (isset($_POST["stop"])) {
            $running = false;
        } // Quando a tag <input> no HTML for clicada, o valor de $running que é (true) irá mudar para false, e assim o loop irá parar

        else {
        // wait 1 second
        $seconds++;
        echo $seconds . "<br>";
        } // Se não, ele irá continuar
    }


    /*
    $counter = 0; // Definimos o valor de $counter

   while($counter <= 9) { // Vai acontecer até 10
    $counter++; // Precisa para evitar loop infinito
    echo $counter . "<br>"; // Mostra os números em contagem, junto com uma quebra de linha <br>
   }
    */
?>