<?php
/*Restrições e regras para variáveis PHP 
/**As variáveis devem conter nomes auto explicativos 
*/
$anoNascimento = 1980;
echo $anoNascimento;
echo "<br />";
/**Em variáveis com nomes compostos as variáveis podem ser criadas todas em letras minusculas 
 * ou podem ser criadas com a primaira letra minuscula e o segundo nome a primeira letra maiuscula.
 */
$nomeCompleto = " Marivaldo Cordeiro<br />";
echo $nomeCompleto;

/**Quando for necessário conter números em uma variável eles devem sempre estar localizados
 * no meio do nome da variável ou no fim da variável.
 */
$nome1 = "Carlos";


/**carecteres especiais o único permitido no PHP é o underline "_" ou undescore 
*/
$_nome2 = "Cordeiro<br />";


/**Concatenação é a junção de duas ou mais variáveis exemplo */
$nomecompleto =  $nome1 ." ".  $_nome2;

echo $nomecompleto;

exit;

echo "<br />";

unset ($nome1);

if (isset($nome1)){
    echo $nome1;
}




//As variáveis também não devem conter nomereservados exemplo  $this.
?>