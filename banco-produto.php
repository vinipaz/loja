<?php
function insereProduto($conexao, $nome, $preco, $descricao) {
	$query = "INSERT INTO produtos (nome, preco, descricao) VALUES ('{$nome}', {$preco}, '{$descricao}')";
	return mysqli_query($conexao, $query);
}

function listaProdutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM produtos");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function removeProduto($conexao, $id) {
	$query = "DELETE FROM produtos WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}