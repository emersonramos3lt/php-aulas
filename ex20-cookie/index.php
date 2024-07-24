<?php
    // cookie = Information about a user stored in a user's web-browser 
    // targeted advertisements, browsing preferences, and oher non-sensitive data

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if (isset($_COOKIE["fav_food"])) {
        echo "Buy some {$_COOKIE["fav_food"]} !!!";
    }

    else {
        echo "I don't know your favorite food";
    }

    // Cookie Estrutura: setcookie("fav_food", "pizza", time() + (86400 * 2), "/");

    // 1 - "fav_food" = Uma associativa array

    // 2 - "pizza" = O valor para "fav_food"

    // 3 - time() = tempo que o cookie irá expirar

    // 4 - 86400 * 2 = Será o tempo que o cookie vai expirar

    // 5 - "/" = Usado para o caminho padrão do arquivo
?>