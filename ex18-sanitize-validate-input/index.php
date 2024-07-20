<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login">

        age:<br>
        <input type="text" name="age"><br>
        <input type="submit" name="login" value="login">

        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php


    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // 1 - INPUT_POST = O tipo de form que estamos usando GET ou POST
    // 2 - Nome do input que queremos usar filter_input()
    // 3 - Filtra certos tipos de textos, como <script> alert





    // PRINCIPAIS TIPOS DE FILTER

    // FILTER_SANITIZE_SPECIAL_CHARS = Evita caracteres especiais tenham alguma ação, por exemplo colocar um <script> com alerta

    // FILTER_SANITIZE_NUMBER_INT = Em um valor com letras e números, ele irá pegar apenas os números

    // FILTER_SANITIZE_EMAIL = Não irá mostrar caracteres como < > () apenas @ . ou texto comuns em emails


    if(isset($_POST["login"])) {

        // O uso do filter_input evita algum <script> malicioso no <input>

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email",
        FILTER_VALIDATE_EMAIL);


        if(empty($email)) {
            echo "That number wasn't valid";
        } // Qualquer valor inválido em "$email" ou "$age" irá mostrar o if
        // $age = abc
        // $email = < > ()

        else {
            echo "You are {$email} years old";
        } // Caso não haja nenhum valor inválido mostrará a mensagem acima
    }









    /*
    if (isset($_POST["login"])) {

        // O uso de filter_input() evita que caracteres tenham uma certa ação, por exemplo usar um <script> para falar que seu computador tem vírus
       $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", 
        FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", 
        FILTER_SANITIZE_EMAIL);

        echo "Hello {$username}";
        echo "You are {$age} years old";
        echo "Your email is {$email}";
    }

    // FILTER_SANITIZE_NUMBER_INT = Caso a pessoa escreva "abc4defg5" ele irá mostrar apenas os números, que mostrará 45
    */

    /*
    if (isset($_POST["login"])) { // Envia o valor colocado em username
        $username = $_POST["username"]; // Pega o valor digitado

        echo "Hello {$username}"; // Mostra o valor digitado
    }
    */
    
?>