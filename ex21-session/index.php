<!-- Page 1 -->

<?php
    // session = SGB used to store information on a user to be used across multiple pages. A user is assigned a session-id
    // ex. login credentials

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>

        <label>password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="login">
    </form>

</body>
</html>
<?php
    if(isset($_POST["login"])) {

        if(!empty($_POST["username"]) &&
        !empty($_POST["password"])) {

        $_SESSION["username"] = $_POST["username"];

        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");

        //echo $_SESSION["username"] . "<br>";
        //echo $_SESSION["password"] . "<br>";
        }

        else {
            echo "Missing username/password <br>";
        }
    } // Quando as tags <input> de "username" e "password" forem preenchidas, a linha de baixo
    // "header("Location: home.php"); Irá te levar a outra página 
?>