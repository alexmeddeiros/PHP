<?php
// SUPERGLOBALS
// As superglobais estão sempre acessiveis independente do escopo da aplicação

/*
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

// $GLOBALS 
// permite acessar qualquer variavel de escopos diferentes
$x = 5;
$y = 10;

function soma()
{
	//echo $x + $y;// assim nao consegue acessar os valores de fora
	echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();
echo "<hr>";


// $_SERVER 
// Contém informações sobre cabeçalhos, caminhos e locais de script. Nada mais é 
// que um array que contém vários índices
echo $_SERVER['PHP_SELF'].'<br>'; //exibe o nome do arquivo. ex.: /18-superglobais.php
echo $_SERVER['SERVER_NAME'].'<br>'; // Retorna o servidor que esyá o projeto. ex.: localhost
echo $_SERVER['SCRIPT_FILENAME'].'<br>'; // retorna o caminho ABSOLUTO do script em execução
echo $_SERVER['DOCUMENT_ROOT'].'<br>'; // retorna o diretório raiz do script em execução
echo $_SERVER['SERVER_PORT'].'<br>'; // retorna a porta do servidor
echo $_SERVER['SERVER_ADDR'].'<br>'; // retorna o IP do usuário que está visalizando a página


// $_POST 
// transfere informações do formulário de modo invisível
// Arquivos estão dentro da pasta formularios

// $_GET
// transfere informações do formulário através da URL
// Arquivos estão dentro da pasta formularios