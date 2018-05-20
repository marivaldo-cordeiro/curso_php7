<?php
/**DADOS BÁSICOS */

// Este de tipo de dado é uma string
  $nome = "Marivaldo";

  //Este também porém com aspas simples
  $site = 'www.segredo.com.br';

  //Este dado é do tipo númerico
  $ano = 1980;

  //Este dado é  do tipo flutuante
  $salario = 3400.67;

//Este daado é do tipo Booleano
  $bloqueado = false;

  /**Sempre usando variáveis auto-explicativas
  *os dados do tipo texto sempre devem conter aspas simples ou duplas
  *Os dados do tipo númerico também podem conter aspas, porém eles viram texto ao adicionar aspas
  *e acabam pesando mais na memória do servidor
  */


 /**DADOS COMPOSTOS  */
 //arrays e objeto

 //Estes dados é do array
$frutas = array("Melâcia ", "Maçã ", "Banana");

echo $frutas[0];
echo $frutas[1];
echo $frutas[2];
echo "<br />";

//Este dado é do tipo objeto
$nascimento = new DateTime();

//var_dump($nascimento);

/////////////////////////////////////////////

 //DADOS DO TIPO ESPECIAIS
 //resources e null

 $arquivo = fopen("exemplo03.php", "r");

//var_dump($arquivo);
//variável do tipo nulo, é a variável sem conteúdo existente
$nulo = NULL;

//variável do tipo vazio, é a variável vazia mas que já está iniciada e portanto é existente
// e tem espaço guardado ou peso na memória
$vazio = "";

?>