<?php
    // $username = "Emerson";
    $phone = "123-456-7890";





    //$username = strtolower($username); // Transforma todo o texto em minúsculo

    //$username = strtoupper($username); // Transforma todo o texto em maiúsculo

    //$username = trim($username); // Remove espaços em brancos

    //$username = str_pad($username, 20, "0"); // Vai adicionar "0" ao nome, não será "20", porque como tem 7 letras já em $usernae, ele irá mostrar 13 "0"

    //$usernae = str_replace("-", "", $phone); // Separa os itens de $phone com um "-"

    //$username = strrev($username); // Inverte a palavra

    //$username = str_shuffle($username); // Embaralha o $username

    //$equals = strcmp($username, "Emerson"); // Retorna uma mensagem se o valor ser igual há o valor dentro das ""

    //$count = strlen($username); // Conta o número de letras

    //$index = strpos($username, "m"); // Irá procurar em qual posição a letra "m" está localizada, e irá mostrar o número de seu lugar

    //$firstname = substr($username, 0, 3); // Irá pegar o nome apenas até uma certa parte, que irá imprimir "Eme";

    //echo $firstname;




    //$fullname = explode(" ", $username); // Mostra o nome em colunas ou as palavras após um espaço, em colunas, dividindo em array

    /*
    foreach($fullname as $name) {
        echo $name . "<br>";
    };
    */


    $username = array("FirstName", "secondName");

    $username = implode(" ", $username); // Transforma uma array em string

    echo $username;
?>