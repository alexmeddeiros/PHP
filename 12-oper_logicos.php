<?php

/*
 *	Operadores lógicos
 * Nos permitem fazer comparaçes entre expressões
 * e (&& - and)
 * ou (|| - or)
 * ou exclusivo (xor)
 * negação (!)
 */

$idade = 25;
$nome = "Alex";

if(($idade == 25) && ($nome == "Alex"))
	echo "É verdadeiro";
else
	echo "É falso";



echo "<hr>";
if(($idade == 27) || ($nome == "Alex"))
	echo "É verdadeiro";
else
	echo "É falso";



echo "<hr>";
// O xor só retorna verdadeiro se apenas uma for verdadeira, se as duas for TRUE ele retorna false
if(($idade == 25) xor ($nome == "Alex"))
	echo "É verdadeiro";
else
	echo "É falso";


echo "<hr>";
// O and só retorna verdadeiro se apenas uma for verdadeira, se as duas for DIREFENTE DE true  POR CAUSA DA "!" ele retorna false
if(!($idade == 25) and ($nome == "Alex"))
	echo "É verdadeiro";
else
	echo "É falso";