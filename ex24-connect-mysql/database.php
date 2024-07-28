<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb"; // Nome criado no site MySQL

    $coon = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }

    catch(mysqli_sql_exception) {
        echo "Could not connect!";
    } // Usando try{} e catch{} se o MySQL não conectar ele não irá mostrar uma mensagem de erro grande

    if($conn) {
        echo "You are connected!";
    }
?>