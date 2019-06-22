<?php

// Funções para strings

/* 
 * strtoupper
 * strtolower
 * substr($string, 4)
 * str_pad
 * str_repeat
 * strlen
 * str_replace
 * strpos
 */

$nome = "alex medeiros";

echo strtoupper($nome);
echo "<hr>";
echo strtolower($nome);
echo "<hr>";

// substr
$mensagem = 'Olá Mundo!';
echo substr($mensagem, 4); // retorna a mensagem apartir do caractere 4 (Mundo!)
echo "<br>";
echo substr($mensagem, 4, 5); // retorna a mensagem apartir do caractere 4 e conta até o 5(Mund)
echo "<hr>";


// str_pad
// complementa outra string com um quantidade especifocada de caracteres
$objeto = 'Notebook';
$novoObjeto = str_pad($objeto, 15, "#", STR_PAD_LEFT);
$novoObjeto2 = str_pad($objeto, 15, "#", STR_PAD_RIGHT);
$novoObjeto3 = str_pad($objeto, 15, "#", STR_PAD_BOTH);
echo $novoObjeto."<br>";
echo $novoObjeto2."<br>";
echo $novoObjeto3;
echo "<hr>";


// str_repeat
$string = str_repeat($objeto, 5); //Repete até o determinado numero
echo $string;
echo "<hr>";


// strlen
// retorna o cumprimento de uma string
echo strlen($objeto);
echo "<hr>";


// str_replace
// substitui trecho de uma string
$texto = "A seleção Argentina ganhou a copa de 1994";
echo $texto."<br>";
echo str_replace("Argentina", "Brasileira", $texto);
echo "<hr>";


// str_pos
// retorna a posição de uma palavra em um texto
echo strpos($texto, "copa");