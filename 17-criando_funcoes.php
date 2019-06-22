<?php

// Funçoes;

function exibirNome($nome)
{
	echo "Meu nome é $nome";
}
exibirNome("Alex");

echo "<hr>";

function calculaMedia($nome, $n1, $n2, $n3, $n4)
{
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	echo "O aluno $nome ficou com a media $media<br>";
	if($media >= 7)
		echo "e está Aprovado!";
	else
		echo "e está Reprovado!";
}

calculaMedia("Alex Medeiros", 2.5, 7.0, 8.2, 10);