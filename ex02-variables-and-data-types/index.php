<?php
    // variable = a reusable container that holds data, string integer, float, boolean


    $name = "Emerson";
    $food = "pizza";
    $email = "email@gmail.com";

    // NUMBER
    $age = 21;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;


    // BOOLEAN
    // BOOLEAN false or true
    $employed = true;
    $online = false;
    $for_sale = true;

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";






    /*
    // TEXT
    $name = "Emerson";
    $food = "pizza";
    $email = "email@gmail.com";

    // NUMBER
    $age = 21;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    // BOOLEAN
    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";
    // Mostrará a mensagem "Hello" e o valor colocado em $name
    // $name precisa ir dentro das {} em echo

    echo "You are {$age} years old<br>";
    echo "There are {$users} online<br>";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is: {$gpa}<br>";
    echo "You pizza is \${$price}<br>";
    echo "The sales tax rate is: \${$tax_rate}<br>";
    // Para usar o valor $ precisa de \$ fora das {}

    echo "Online status: {$online}<br>";
    */

    /*
    $name = "Emerson"; 
    echo $name; 
    // Criamos $name e colocamos um valor dentro das ""
    // No echo, chamamos o $name, que mostrará o valor armazenado na página
    */

?>