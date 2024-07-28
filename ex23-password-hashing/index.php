<?php
    // hashing = transforming sensitive data (password) into letters, numbers, and/or symbols via a mathematical process. (similar to encryption)
    // Hides the original data from 3rd parties.

    $password = "pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("password123", $hash)) {
        echo "You are logged in!";
    } // Se $passowrd for igual há "password123", irá mostrar o if

    else {
        echo "Incorrect password!";
    } // Se não, irá mostrar o else
    
    //echo $hash; // Com o uso do password_hash() não irá mostrar a senha, mas um número de letras e números
?>