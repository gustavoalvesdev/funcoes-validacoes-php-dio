<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
	$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
	header('Location: index.php');
	return;
}

if (strlen($nome) < 3) {
	$_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
	header('Location: index.php');
	return;
}

if (strlen($nome) > 40) {
	$_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
	header('Location: index.php');
	return;
}

if (! is_numeric($idade)) {
	$_SESSION['mensagem-de-erro'] = 'Informe um número para a idade';
	header('Location: index.php');
	return;
}

if ($idade >= 6 && $idade <= 12) {
	for ($i = 0; $i < count($categorias); $i++) {
		if ($categorias[$i] == 'infantil') {
			$_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
			header('Location: index.php');
			return;
		}
	}
} else if ($idade >= 13 && $idade <= 18) {
	for ($i = 0; $i < count($categorias); $i++) {
		if ($categorias[$i] == 'adolescente') {
			$_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.'compete na categoria adolescente';
			header('Location: index.php');
			return;
		}
	}
} else {
	for ($i = 0; $i < count($categorias); $i++) {
		if ($categorias[$i] == 'adulto') {
			$_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria adulto';
			header('Location: index.php');
			return;
		}
	}
}
 