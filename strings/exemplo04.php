<?php

//strpos — Encontra a posição da primeira ocorrência de uma string
$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, "mãe");

//substr — Retorna uma parte de uma string
$texto = substr($frase, 0, $q);

var_dump($texto);

$texto = substr($frase, $q);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);

?>