<?php
    $submit = $_POST["submit"];
    $username = $_POST["username"];

    if(isset($submit)) {
        if(empty($username)) {
            echo "O valor está vazio";
        }

        else {
            echo "Olá {$username}!";
        }
    }
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        form {
            border-bottom: 2px solid #000;
            margin-bottom: 5rem;
        }

        main {
            max-width: 800px;
            margin: auto;
        }

        main span {
            color: purple;
        }

        li {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    
    <form action="index.php" method="post">

        <label>Como gostaria de ser chamado?</label>
        <input type="text" name="username">
        <input type="submit" value="Enviar" name="submit">

    </form>

<main>
<h1>Criado uma tabela no PHP</h1>

<ol>
 <li>Primeiro vá no XAMPP</li>

 <li>Aperte a tecla <span>start</span> e depois <span>admin</span></li>

 <li>Você irá para o site do MySQL, lá você irá clicar <span>Base de Dados</span></li>

 <li>Irá clicar na base de dados criada por você, algo que pode ser visto no <span>ex24</span></li>

 <li>Você irá escolher o nome da sua tabela, e seu número de colunas. Após isso você irá apertar a tecla <span>Criar</span></li>

 <li>Lá você coloca o nome de cada coluna escolhida e seu <span>Tipo, Tamanho/valores, Predefinido e dentre outros se for necessário</span></li>

 <li>Após isso você clica em <span>Guardar</span></li>

 <li>A tabela criada poderá ser vista e adicionar valores a ela na aba de cima <span>Inserir</span></li>
</ol>
</main>

</body>
</html>