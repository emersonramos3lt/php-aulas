<?php
    include("database.php");

    $username = "Patrick";
    $password = "rock3";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')"; // Iremos colocar esses valores em nossa tabela no MySQL

    // Colocamos em users e na tabela user e password, criando em nossa tabela em businessdb

    try {
        mysqli_query($conn, $sql);
        echo "User is now registered";
    }

    catch(mysqli_sql_exception) {
        echo "could not register user";
    }

    mysqli_close($conn); // Isso acontece porque o VS não reconhece $conn que está no outro arquivo
?>