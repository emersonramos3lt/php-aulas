<?php 
    // Logical operators = combine conditional statements
    // if(condition1 && condition2)

    // && = True if both conditions are true
    // || = True if at least one conditions is true
    // ! = True if false. False if true.


  

    $child = false;
    $senior = false;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";




    /*
    $age = 18;
    $citzen = false;

    if ($age >= 18 || !$citzen) {
        echo "You cannot vote";
    }
    else {
        echo "You can vote";
    }
    */





    /*
    $temp = 15;
    $cloudy = true;
    */

    /*
    if ($temp >= 0 && $temp <= 30) {
        echo "The weather is good.";
    } // && é usado para add uma outra condição no if()
     */

     /*
    if ($temp >= 0 || $temp <= 30) {
        echo "The weather is good.<br>";
    } // || Mostrará o texto do if, se uma das condições serem True

    else {
        echo "The weather is bad.<br>";
    }

    if ($cloudy) {
        echo "It's cloudy.<br>";
    } // True 

    else {
        echo "It's sunny.<br>";
    } // False
    */

?>