<?php
    // include() = Copies the content of a file (php/html/text) and includes it in your php file.
    // Sections of our website become reusable 
    // Changes only need to be made in one place

    include("header.html"); // include() pega o conteúdo colocado no header.html e mostra no index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the Home page</h1>
    <h2>Stuff about your home page can go here</h2>
</body>
</html>
<?php
 include("footer.html"); // Pega todo o conteúdo do footer.html e mostra no index.php
?>