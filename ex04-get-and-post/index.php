<?php
    // $_GET, $_POST = special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form>
    // <form action="some_file.php" method="get">

    // $_GET =  Data is appended to the url 
    //          NOT SECURE
    //          char limit
    //          Bookmark is possible w/ values
    //          GET requests can be cached
    //          Better for a search page

    // $_POST = Data is packaged inside the body of the HTTP request
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          GET requests are not cached
    //          Better for submitting credentials






    // ------------------- CÓDIGO -------------------

    // Terá o mesmo resultado do código abaixo, podemos usar tanto para $_POST quanto $_GET
    //echo "{$_POST["username"]} <br>";
    //echo "{$_POST["password"]} <br>";



    // Mostrando os valores digitados no <form> na página
    /*
    echo $_GET["username"] . "<br>";
    echo $_GET["password"] . "<br>"; 
    */
    // Obs: colocamos o name="" do <input> e não o id


    // ------------- EXEMPLO 2 -------------

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"]; // Pegar a quantidade digitada no input, usando o método POST
    $total = null; // null = nenhum valor
    $total = $quantity * $price; // Definimos o valor de $total, a partir do resultado da multiplicação

    // Irá mostrar o texto na página
    echo "You have ordered {$quantity} x {$item}s <br>";
    echo "Your total is: \${$total}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--
    1. No <form> colocamos em action="" o arquivo PHP que irá receber os dados colocados no <form>

    2. Em method="" colocamos GET ou POST

    3. POST é mais seguro, porque dados como senha e nome não ficam anexados na URL
    -->


    <!-- CÓDIGO -->

    <!-- 
    <form action="index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="Log in">
    </form> 
    -->

    <!-- EXEMPLO 2 -->
    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>

</body>
</html>