<?php
/*
 * is_array($array) = Verifica se uma determinada variável é um array;
 * in_array($valor, $array) = Verificase um determinado valor existe em alguma posição do array;
 * array_keys($array) = Retorna um novo array com as chaves do array passado como parâmetro;
 * array_values($array) = Retorna um novo array com as valores do array passado como parâmetro;
 * array_merge($array1, $array2) = Agrega o conteúdo dos dois arrays;
 * array_pop($array) = Exclui a última posição do array;
 * array_shift($array) = Esclui a primeira posição do array;
 * array_unshift($arr, "valor") = Adiciona um ou mais elementos no início do array;
 * array_push($arr, "valor", "valor") = Adiciona um ou mais elementos no final do array;
 * array_combine($keys, $values) = Mescla os dois arrays passados;
 * array_sum() = Calcula a soma dos elementos de um array;
 * explode("/", "20/01/2019") = Transforma string em array;
 * implode("-", $arr) = Transforma array em string
 */


$nomes = array("Marido"=>"Alex", "Filho"=>"Anthony", "Esposa"=>"Sabrina");

if(is_array($nomes)):
	echo "é um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

// in_array
echo in_array("Sabrina", $nomes);
echo "<hr>";

// array_keys
$keys = array_keys($nomes); //Keys vira um array apenas com os idices do array $nomes
print_r($keys);
echo "<hr>";

// array_values
$values = array_values($nomes); //values vira um array apenas com os valores do array $nomes
print_r($values);
echo "<hr>";

// array_merge
$carros = array("Camaro", "Porsche", "Fusion");
$motos = array("Pop 100", "Biz", "Indian");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

// array_pop
array_pop($veiculos);
print_r($veiculos);
echo "<hr>";

// array_shift
array_shift($veiculos);
print_r($veiculos);
echo "<hr>";

//array_unshift
array_unshift($veiculos, "Continental");
print_r($veiculos);
echo "<hr>";

//array_push($arr, "valor", "valor")
array_push($veiculos, "Mitsubish", "Gallardo");
print_r($veiculos);
echo "<hr>";

//array_combine($keys, $values)
$dia = array("Segunda-feira", "terça-feira", "Quarta-feira", "Quinta-feira");
$compromissos = array("Dentista", "Faculdade", "Shopping", "Futebol");
$tarefas = array_combine($dia, $compromissos);
print_r($tarefas);
echo "<hr>";

//array_sum()
$numeros = array(1, 40, 9, 5);
echo array_sum($numeros);
echo "<hr>";

//explode("/", "20/01/2019")
$data = "30/10/2019";
$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";

$frase = "Meu nome nao é Alex";
$novaFrase = explode(' ', $frase);
print_r($novaFrase);
echo "<hr>";

//implode("-", $arr)
$string = implode(' ', $novaFrase);
echo $string;