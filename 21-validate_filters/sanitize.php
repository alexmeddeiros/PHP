<!DOCTYPE html>
<html>
<head>
	<title>VALIDATE</title>
</head>
<body>

<!-- Validaçoes 
 Funções (filter_input - filter_var)
 FILTER_SANITIZE_SPECIAL_CHARS
 FILTER_SANITIZE_NUMBER_INT
 FILTER_SANITIZE_EMAIL
 FILTER_SANITIZE_FLOAT
 FILTER_SANITIZE_URL
-->

<!-- A Sanitização é importante, pois se não limparmos os dados 
	do formulário, podem ser enviados caracteres maliciosos ou tags HTML
	que podem ser prejudicial -->


<?php 
// verifica se existe o indice 'enviar_formulario' dentro de $_POST, Se
// existir é porq foi clicado no botão
if(isset($_POST['enviar-formulario']))
{
	// Array de erros
	$erros = array();

	//Sanitização
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	echo $nome."<br>";

	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	//Aplicando tambem VALIDADE junto ao SANITIZE
	if(!filter_var($idade, FILTER_VALIDATE_INT))
		$erros[] = "A idade precisa ser do tipo inteiro";

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		$erros[] = "Email inválido!";

	$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
	if(!filter_var($url, FILTER_VALIDATE_URL))
		$erros[] = "A URL é inválida";


	// Exibe os erros
	if(!empty($erros))
		foreach ($erros as $erro) 
			echo "! $erro <br>";
	else
		echo "Parabens! Dados corretos";
}
?>

<!-- A action está refenciando o proprio arquivo -->
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		Nome: <input type="text" name="nome"><br>
		Idade: <input type="text" name="idade"><br>
		Email: <input type="text" name="email"><br>
		URL: <input type="text" name="url"><br>
		<button type="submit" name="enviar-formulario">Enviar</button>
	</form>

</body>
</html>