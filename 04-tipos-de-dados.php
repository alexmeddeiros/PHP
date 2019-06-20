<?php

// ********** Dados escalares *********

// String
$nome = "Olá mundo!";
var_dump($nome);

if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

// Int
$idade = 0;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

// Float
$altura = 1.75;
var_dump($altura);
if (is_double($altura)):
	echo "É um Float";
else:
	echo "Não é Float";
endif;
echo "<hr>";


// Boolean
$admin = false;
var_dump($admin);
if (is_bool($admin)):
	echo "É um Booleano";
else:
	echo "Não é Booleano";
endif;
echo "<hr>";


// *************** COMPOSTOS ***********
// Arrays
echo"<pre>";
$carros = array("Gol", "Fiat", "Bmw", 20, 20.6, true);
var_dump($carros); 	
echo"</pre>" ;		
if (is_array($carros)):
	echo "É um Array";
else:
	echo "Não é Array";
endif;
echo "<hr>";

// Objeto
class Cliente
{
	public $nome;
	public function atribuirNome($nome)
	{
		$this->nome = $nome;
	}
}

$c1 = new Cliente();
$c1->atribuirNome('Alex');

var_dump($c1);
if (is_object($c1)):
	echo "É um Objeto";
else:
	echo "Não é Objeto";
endif;
echo "<hr>";


// ************ ESPECIAIS ***********
// NULL
$cidade = NULL;
var_dump($cidade);

// Resource
/* é um tipo de dados pra fazer referencias a arquivos externos, como 
 * conexao a banco de dados e etc.
 */