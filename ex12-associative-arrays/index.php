<?php
    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA"=>"Washington D.C.", 
                    "Japan"=>"Kyoto", 
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");

    //$capitals["USA"] = "Las Vegas"; // Mudamos o valor de "USA"

    // $capitals["China"] = "Beijing"; // Add um novo valor há array

    //array_pop($capitals); // Remove o último elemento

    //array_shift($capitals); // Remove o primeiro elemento

    /*
    $keys = array_keys($capitals); // Bom para se usar no foreach
    foreach($keys as $key) {
        echo "{$key} <br>";
    }  // Só mostra o primeiro valor, os países
    */

    /*
    $values = array_values($capitals);

    foreach($values as $value) {
        echo "{$value} <br>";
    } // Mostra as capitais, segundo valor
     */


    // $capitals = array("USA"=>"Washington D.C.");

    // array_shift irá mostrar o primeiro valor. Ex: [USA]
    // array_values mostrará o segundo valor Ex: [Washington D.C.]

    // $capitals = array_flip($capitals); // Inverte a ordem de apresentação
    // Ex: Washington D.C. = USA

    //$capitals = array_reverse($capitals); // Reverte a ordem de apresentação. Ex: 4, 3, 2, 1

    echo count($capitals); // Mostra a quantidade items na array

    /*
    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    } 
    */




    /*
    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    } // Usando o loop, escrevemos uma menor quantidade de linha
    // $capitals virará $key no loop
    */

    /*
    // Mostra as capitais, que estão definidas após =>
    echo $capitals["USA"];
    echo $capitals["Japan"];
    echo $capitals["South Korea"];
    echo $capitals["India"];
    */
?>