<?php

    // switch = replacement to using many elseif statements
    //           more efficient, less code to write



    $date = date("1");
    $date = "Sunday";

    switch($date) {
        case "Monday":
            echo "Monday";
            break;
        case "Tuesday":
            echo "Tuesday";
            break;
        case "Wednesday":
            echo "Wednesday";
            break;
        case "Thursday":
            echo "Thursday";
            break;
        case "Friday":
            echo "Friday";
            break;
        case "Saturday":
            echo "Time to party!";
            break;
        case "Sunday":
            echo "Time to relax";
            break;
        default: 
            echo "{$date} is not a day";
    }







    /*
    $grade = "A";

    // Mostrará cada case, de acordo com o valor em $grade
    switch($grade) {
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You failed";
            break;
        default:
            echo "{$grade} is not valid";
    } // Mostrará default caso, o valor seja inválido
    */
?>