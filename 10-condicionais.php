<?php


// If com operadores Ternario
$media = 6;

//     codição    if = ?     else = : 
echo ($media >= 7) ? "Aprovado" : "Reprovado";
//imptime APROVAO ou  REPROVADO se IF dor >= 7
echo "<hr>";

// ====== SWITCH =======

$cor = "rosa";
switch ($cor) {
	case 'vermelho':
		echo "sua cor preferida é vermelho";
		break;
	case 'azul':
		echo "sua cor preferida é azul";
		break;
	case 'verde':
		echo "sua cor preferida é verde";
		break;
	
	default:
		echo "Essa cor nao existe";
		break;
}