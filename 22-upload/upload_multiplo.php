<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	if(isset($_POST['enviar-formulario']))
		// Array com os formatos permitidos
		$formatAccept = array('png', 'jpeg', 'jpg', 'gif');
		$quantidadeArquivos = count($_FILES['arquivo']['name']);
		$contador = 0;

		while ($contador < $quantidadeArquivos) 
		{
		    // name do input = arquivo e indice do array $_FILES['name']
			$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION); // Pega a extensao do arquivo

			//verifica se a extensao contem dentro do array
			if(in_array($extensao, $formatAccept))
			{
				$caminho = "arquivos/"; //pasta a ser salva o arquivo
				$temporario = $_FILES['arquivo']['tmp_name'][$contador]; // local temporário
				$novoNome = uniqid().".$extensao"; //Atribui um novo nome ao arquivo

				// Move o arquivo para a pasta $caminho
				if(move_uploaded_file($temporario, $caminho.$novoNome))
					echo "Upload feito com sucesso para a pasta $caminho$novoNome <br>";
				else	
					echo "Falha ao enviar arquivo <br>";
			}else{
				echo "Não é permitido arquivos com extensão '.$extensao'. <br>";
			}
			$contador++;
		}
 ?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

		<input type="file" name="arquivo[]" multiple=""><br>
		<button type="submit" name="enviar-formulario">Fazer upload</button>

	</form>

</body>
</html>