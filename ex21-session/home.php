<!-- Page 2 -->

<?php
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
    <h1>This is the home page</h1>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
    // Com o uso do session_start() as informações usadas no index.php, pode ser pegas e mostradas em outras páginas

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    } // Quando apertar o <input> irá te mandar para index.php e irá retirar a sua atual sessão
?>