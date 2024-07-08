<?php
    // if statement = if some condition is true, do something 
    //                if condition is false, don't do it

    // --------- EXEMPLO 1 ------------
    /*
    $age = 21;

    if ($age >= 18) {
        echo "You may enter this site";
    } // Verifica se há idade é igual ou superior há 18

    elseif($age <= 0) {
        echo "That wasn't a valid age";
    }

    elseif($age >= 100) {
        echo "You are too old to enter this site";
    }
    
    else {
        echo "You must be 18+ to enter";
    }

    // True = Mostra a mensagem do if
    // false = Mostra a mensagem do else

    // if e else só pode haver um de cada, já elseif pode se colocar mais de um
    */







    // ---------- EXEMPLO 2 -----------

    /*
    // Usando TRUE e FALSE
    $adult = true;

    if($adult == true) {
        echo "You may enter this site";
    }

    else {
        echo "You must be an adult to enter";
    }
    */





    // --------- EXEMPLO 3 -----------
    $hours = 40;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0) {
        $weekly_pay = 0;
    }

    elseif($hours <= 40) {
        $weekly_pay = $hours * $rate;
    }

    else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week";

?>