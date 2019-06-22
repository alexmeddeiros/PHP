<?php

/* A StdClass é uma classe predefinida do PHP. Ela é vazia,
 * ou seja, não possui métodos nem propriedades. Mas qual o 
 * objetivo disto? Ela é a classe padrão dos objetos que não 
 * são declarados, ou seja, quando você converte um array ou 
 * algum outro tipo para objeto, na verdade está criando um 
 * objeto da StdClass. É útil também utilizar a StdClass quando 
 * se deseja criar um objeto vazio e ir adicionando as 
 * propriedades conforme necessário.
 */

$a = new stdClass;	// criar um objeto

$a->nome = 'Alex';  // define atributos
$a->email = 'alex@email.com';	// define atributos
$b = $a;	// cria réplica;
 
var_dump($b);
echo '<br>';
echo($b->nome).'<br>';
echo($a->nome);

echo '<hr';


// TIPOS MIXED
/* O tipo misto(mixed) é uma identificação que representa diversos tipos de dados (não todos)
 * que podem ser usados em um memo parâmetro. Um parâmetro do tipo mixed indica que a função aceita diversos
 * tipos de dados como parâmetro. Um exemplo é a função gettype(), que obtém o tipo da variável passada como parâmetro
 * ( o que pode ser integer, string, array, objeto, entre outros).
 */
  
  //string gettype(mixed var);
