<?php

// For & Foreach

// FOR 
//É utilizado quando sabemos antecipadamento o n de repetiçoes
// TABUADA DO 8
$numero = 4;
for($contador = 0; $contador <= 10; $contador++)
	echo "$numero x $contador = ".($contador * $numero)."<br>";

echo "<hr>";

// FOREACH
// É utilizado para percorer array

//com indices
$cidades = array('Sao Paulo', 'Curitiba', 'Rio Branco', 'Itararé');
foreach($cidades as $indice => $cidade)
	echo $indice.' - '.$cidade."<br>";

echo "<hr>";

//Sem indices
foreach($cidades as $cidade)
	echo $cidade."<br>";