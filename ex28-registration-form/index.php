<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome!</h2>

        <label>username:</label>
        <input type="text" name="username"><br>

        <label>password:</label>
        <input type="password" name="password"><br>

        <input type="submit" name="submit" value="register">

    </form>
</body>
</html>

<?php 

    // Quando colocarmos a senha e o usúario no input, os valores irão ser mandados direto para a tabela do MySQL
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)) {
            echo "Please enter a username";
        }

        elseif (empty($password)) {
            echo "Please enter a password";
        }

        else {
            $hash = password_hash($password, PASSWORD_DEFAULT); // Protege a senha, fazendo com que ela não seja mostrado na tabela MySQL
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

            try {
                mysqli_query($conn, $sql); {
                echo "You are now registered";
                }
            }

            catch(mysqli_sql_exception) {
                echo "That username is taken";
            }
        }

    }

    mysqli_close($conn)
?>