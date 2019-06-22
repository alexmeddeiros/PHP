<?php

$exibe_nome = TRUE;

if($exibe_nome){ //não necessita fazer if($exibe_nome = TRUE)
	echo 'Alex Medeiros';
};

echo "<hr>";


$umidade = 91;
// Testa se é maior que 90 e retorna um booleano pra @var $vai_chover
$vai_chover = ($umidade > 90);

// testa de $vai_chover é verdadeiro
if($vai_chover)
	echo 'Vai chover';
else
	echo 'não vai chover';

echo "<hr>";