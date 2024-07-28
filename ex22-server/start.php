<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>username:</label><br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<!-- No action="" no form usamos SERVER para poder atualizar a página automaticamente e não mostrar uma mensagem de erro
 
Ex: Mudar o nome do arquivo PHP, irá evitar que apereça erro porque action="" é atualizado
-->


<?php
    // $_SERVER = SGB that contains headers, paths, and script locations.
    // The entries in this array are createdby the web server.
    // Shows nearly everthing you need to know about the current web page env.

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "HELLO";
    }

    

    /*
    foreach($_SERVER as $key => $value) {
        echo "{$key} = {$value} <br>";
    } // Mostrar informações detalhadas do servidor
    */
?>