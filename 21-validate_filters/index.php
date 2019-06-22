<!DOCTYPE html>
<html>
<head>
	<title>VALIDATE</title>
</head>
<body>

<!-- Validaçoes 
 Funções (filter_input - filter_var)
 FILTER_VALIDATE_INT
 FILTER_VALIDATE_EMAIL
 FILTER_VALIDATE_FLOAT
 FILTER_VALIDATE_IP
 FILTER_VALIDATE_URL
-->

<?php 
// verifica se existe o indice 'enviar_formulario' dentro de $_POST, Se
// existir é porq foi clicado no botão
if(isset($_POST['enviar-formulario']))
{
	// Array de erros
	$erros = array();

	//Validações
	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT))
		$erros[] = "O campo idade precisa ser um numero inteiro";

	if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))
		$erros[] = "Email inválido";

	if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT))
		$erros[] = "Peso precisa ser inteiro ou numeros reais";

	if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP))
		$erros[] = "IP inválido";

	if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL))
		$erros[] = "URL inválido";


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
		Idade: <input type="text" name="idade"><br>
		Email: <input type="email" name="email"><br>
		Peso: <input type="text" name="peso"><br>
		IP: <input type="text" name="ip"><br>
		URL: <input type="text" name="url"><br>
		<button type="submit" name="enviar-formulario">Enviar</button>
	</form>

</body>
</html>