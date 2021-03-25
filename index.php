<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de inscrição:</title>
	<meta name="author" content="Gustvo Alves da Silva">
	<meta name="description" content="Página de inscrição de competidores de natação">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<p>FORMULÁRIO DE INSCRIÇÃO DE COMPETIDORES</p>
	
	<form action="script.php" method="POST">
		<?php 
			$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
			if (! empty($mensagemDeSucesso)) {
				echo $mensagemDeSucesso;
				unset($_SESSION['mensagem-de-sucesso']);
			}
			
			$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
			if(!empty($mensagemDeErro)) {
				echo $mensagemDeErro;
				unset($_SESSION['mensagem-de-erro']);
			}
		?>
		<p>Seu nome: <input type="text" name="nome" /></p>
		<p>Sua idade: <input type="text" name="idade" /></p>
		<p><input type="submit" value="Enviar dados do competidor" /></p>
	</form>
	
</body>

</html>