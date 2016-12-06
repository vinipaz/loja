<?php
	require "class/Produto.php";

	$livro = new Produto;
	$livro->nome = "Livro da casa do código";
	$livro->setPreco(10);

	$livro2 = new Produto;
	$livro2->nome = "Livro didatico";
	$livro2->setPreco(25);

	$livro2 = $livro;

	if($livro === $livro2) echo "sao iguais";
	else echo "sao diferentes";
?>