<?php
//******** ARRAYS ********

// Array NUMERICOS
// recebe um array com valores
$carros = array([0=>'Uno', 1=>'Fiat', 2=>'Ford']);
$carros[10] = 'Porche';
var_dump($carros);
echo "<hr>";

// recebe um array vazio e add os valores
$motos = array();
$motos[0] = 'Fazer';
$motos[1] = 'Indian';
$motos[] = 'Lambreta'; //quando nao expecifica o índice, ele salva após o ultimo
$motos[] = 'Titan';
echo $motos[1];
echo "<hr>";

// Aplicar o array diretamente na variável
$clientes = ["Fabio", "Ramon", "João"];
print_r($clientes);
echo "<hr>";


// COUNT contar itens de um array
//echo count($clientes);
$total = count($moto);
echo $total;
echo "<hr>";

// **** APLICANDO O FOREACH PRA LER INDICES DO ARRAY
foreach ($motos as $moto) {
	echo $moto."<br>";
}
echo "<hr>";

// ARRAY ASSOCIATIVOS 
/* 
 *São quando os índices ou chaves são STRINGS
 */
$pessoas = array("nome"=>"Alex", "idade"=>29, "altura"=>1.75, "cidade"=>"Curitiba", "relacionamento"=>"Casado");

//EXIVBE A IDADE
echo $pessoas["nome"].' '.$pessoas['idade'];
echo "<br>";
echo "<br>";
foreach ($pessoas as $pessoa => $valor) {
	echo $pessoa." : ".$valor."<br>";
}
echo "<hr>";

// ARRAY MULTIDIMENSIONAIS
$times = array(
		"cariocas"	=>array("Vasco", "Flamengo", "Fluminense"),
		"paulistas"	=>array("Campeao"=>"Palmeiras", "Vice"=>"São Paulo", "Terceiro"=>"Santos"),
		"Baianos"	=>array("Bahia", "Vitória")
		); 
foreach ($times['paulistas'] as $indice => $valor) {
	echo $indice." : ".$valor."<br>";
}
echo "<br>";