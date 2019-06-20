<?php

// CONSTANTES
/*
	As constantes são sempre globais e não podem ser alteradas
*/

define("NOME", "Alex Medeiros");
define("IDADE", 29);
define("ALTURA", 1.75);
define("CASADO", true);

//constante do tipo array
define("EQUIPES", ['Vasco', 'Palmeiras', 'Flamengo']);

echo 'Meu nome é '.NOME.' e tenho '.IDADE.', e '.ALTURA.' de altura';
echo "<hr>";
var_dump(EQUIPES);
echo "<br>";
echo EQUIPES[1];