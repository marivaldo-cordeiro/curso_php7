<?php
//A declaração include inclui e avalia o arquivo informado.
//E que pode está dentro do mesmo diretório ou em um diretório diferente desxdde que se especifique o caminho exe: php/inc/exemplo02.php   
//include "exemplo01.php";
require "inc/exemplo01.php";
    $resultado = somar(10, 25, 2);
    echo  $resultado;


 /*
 A documentação a seguir também se aplica a declaração require(http://php.net/manual/pt_BR/function.require.php).

Os arquivos são incluídos baseando-se no caminho do arquivo informado ou, se não informado, o include_path especificado. Se o arquivo não for encontrado no include_path, a declaração include checará no diretório do script que o executa e no diretório de trabalho corrente, antes de falhar. O construtor include emitirá um aviso se não localizar o arquivo; possui um comportamento diferente do construtor require, que emitirá um erro fatal.

Se um caminho for definido — seja absoluto (iniciando com a letra do drive ou \ no Windows, ou / no Unix/Linux ), ou relativo ao diretório atual (começando com . ou ..) — o include_path será completamente ignorado. Por exemplo, se o nome do arquivo iniciar com ../, o interpretador irá procurar pelo arquivo no diretório pai.

Para mais informações de como o PHP trabalha ao incluir arquivos e o caminho de inclusão, veja a documentação do include_path.

Quando um arquivo é incluído, o código herda o escopo de variáveis da da linha que a inclusão ocorrer. Qualquer variável disponível no arquivo que incluiu estará disponível no arquivo incluído, daquela linha em diante. Entretanto, todas as funções e classes definidas no arquivo incluído estarão no escopo global.


 */   
/*
A declaração require é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível E_COMPILE_ERROR. Em outras palavras, ele parará o script enquanto que o include apenas emitirá um alerta (E_WARNING) permitindo que o script continue.
*/
?>