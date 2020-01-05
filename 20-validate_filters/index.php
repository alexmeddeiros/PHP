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


	<form action="20-validate_filters/dados.php" method="GET">
		Nome: <input type="text" name="nome"><br>
		Email: <input type="email" name="email"><br>
		<button type="submit">Enviar</button>
	</form>

<!-- ENVIANDO DADOS DIRETO DO LINK -->
	<a href="dados_get.php?idade=25&nome=Alex">Enviar</a>

</body>
</html>