<?php
    // function = write some code once, reuse when you need it type () after function name to invoke
    // ex. add() subtract() multiply() divide()



    function hypotenuse($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c; // Retorna o valor
    }

    echo hypotenuse(3, 4); // Defini o valor de $a e $b

    /*
    function is_even($number) {
        $result = $number % 2;
        return $result; // Retorna o valor
    }

    echo is_even(11); // Defini o valor de $number que está dentro dos ();
    */









    // Definindo mais de um valor na function
    /*
    function happy_birthday($first_name, $age) {
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "Happy Birthday to you! <br>";
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "You are {$age} years old! <br><br>";
    } 

    // 1. Valor defini $first_name
    // 2. Valor defini $age
    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squidward", 45);
    */










    // Definindo um valor na function
    /*
    function happy_birthday($first_name) {
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "Happy Birthday to you! <br>";
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "You are x years old! <br> <br>";
    } // $first_name é definido na chamada da function abaixo

    happy_birthday("Spongebob"); // $first_name = Spongebob
    happy_birthday("Patrick");
    happy_birthday("Squidward"); 
    */







    /*
    function happy_birthday() {
        echo "Happy Birthday dear you! <br>";
        echo "Happy Birthday to you! <br>";
        echo "Happy Birthday dear you! <br>";
        echo "You are x years old! <br> <br>";
    }

    happy_birthday(); // Chama a function, que será mostrada na página

    // Você chama quantas vezes quiser
    happy_birthday();
    happy_birthday();
    */
?>