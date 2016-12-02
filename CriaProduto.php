<?php
	require "class/Produto.php";

	$livro = new Produto;
	$ebook = new Produto;

	$livro->nome = "Livro de php";
	$ebook->nome = "Livro de php OnLine";

	echo "<pre>";
	var_dump($livro);
	var_dump($ebook);
	echo "</pre>";
?>