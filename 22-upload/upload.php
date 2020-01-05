<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
//verifica se o usuario eclicou em encioar formulario
	if(isset($_POST['enviar-formulario']))
		// Array com os formatos permitidos
		$formatAccept = array("png", "jpeg", "jpg", "gif");
		  
	 	//name do input = arquivo e indice do array $_FILES['name']
		$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // Pega a extensao do arquivo
		
		//verifica se a extensao contem dentro do array
		if(in_array($extensao, $formatAccept))
		{
			$caminho = "arquivos/"; //pasta a ser salva o arquivo
			$temporario = $_FILES['arquivo']['tmp_name']; // local temporário
			$novoNome = uniqid()."$extensao"; //Atribui um novo nome ao arquivo

			// Move o arquivo para a pasta $caminho
			if(move_uploaded_file($temporario, $caminho.$novoNome))
				$mensagem = "Upload feito com sucesso!";
			else	
				$mensagem = "Falha ao enviar arquivo";
		}else{
			echo "Formato Inválido";
	}

	echo $mensagem;
 ?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivo"><br>
		<input type="submit" name="enviar-formulario">Fazer upload</innput>

	</form>

</body>
</html>