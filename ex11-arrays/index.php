<?php
    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut"); // Criamos 4 variáveis










    //$foods[0] = "pineapple"; // Podemos trocar um  valor na array, escolhendo a sua posição [0] e seu nome "pineapple"



    //array_push($foods, "pineapple", "kiwi"); // Diferente do código acima, essa linha irá adicionae 2 novos itens, sem substituir os anteriores




    //array_pop($foods); // Remove o último elemento da array




    //array_shift($foods); // Remove o primeiro elemento da array



    // Irá reverter a ordem da array
    //$foods = array_reverse($foods);
    /*
    foreach($foods as $food) {
        echo $food . "<br>";
    }
    */



    echo count($foods); // Mostra o número de elementos na array





    // - MOSTRA TODOS OS ELEMENTOS DA ARRAY NA PÁGINA -
    /*
    foreach($foods as $food) {
        echo $food . "<br>";
    } // Dentro dos (), você usa o nome da array, que é $foods, e depois de "as" você usa a versão sem estar no plural
    // Ex: $cars as $car
    */








    // ---- MOSTRAR OS ELEMENTOS DA ARRAY NA PÁGINA ---
    /*
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";
    */

    // Aqui irá mostar os itens que colocarmos dentro dos [], por exemplo [0] irá mostrar o item na posição 0 da array que é "apple"
?>