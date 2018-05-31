<?php
    $nome = "Marivaldo Cordeiro";

    //Cria uma string maiúscula
    $nome = strtoupper ($nome);
   echo $nome;
    echo "<br />";

    //Cria uma string em minúsculas
    $nome = strtolower($nome);

    echo $nome;
    
    echo "<br />";

    //Cria o primeiro caractere de uma string em maiúsculas
    echo ucfirst ($nome);

    echo "<br />";

    //Maiúscula o primeiro caractere de cada palavra em uma string
    echo ucwords ($nome);



?>