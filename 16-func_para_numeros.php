<?php
// Funções para Numeros

/* 
 * number_format
 * round
 * ceil
 * floor
 * rand
 */


// number_format
$numero = 1245.54;
$preco = number_format($numero, 2, ",", ".");
echo "O valor do produto é: R$ $preco";//O valor do produto é: R$ 1.245,54
echo "<hr>";

// round
// Arredonda um numero
echo round(3.45); //3
echo "<br>";
echo round(3.55); //4
echo "<hr>";

// ceil
// Arredonda um numero, porém so pra cima
echo ceil(3.1); //4
echo "<br>";
echo ceil(4.9); //5
echo "<hr>";

// floor
// Arredonda um numero, porém sempre pra baixo
echo floor(3.1); //3
echo "<br>";
echo floor(4.9); //4
echo "<hr>";

// Rand
echo rand(1,20); // gera numeros aleatórios dentro do parametro que foi passado
echo "<hr>";