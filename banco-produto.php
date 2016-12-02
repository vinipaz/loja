<?php

function insereProduto($conexao, Produto $produto) {
	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}', {$produto->categoria->id}, {$produto->usado})";
	return mysqli_query($conexao, $query);
}

function listaProdutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c ON c.id=p.categoria_id");
	while($produto_atual = mysqli_fetch_assoc($resultado)) {
		$produto = new Produto;
		$categoria = new categoria;

		$categoria->nome = $produto_atual['categoria_nome'];
		$produto->id = $produto_atual['id'];
		$produto->nome = $produto_atual['nome'];
		$produto->preco = $produto_atual['preco'];
		$produto->descricao = $produto_atual['descricao'];
		$produto->categoria = $categoria;
		$produto->usado = $produto_atual['usado'];

		array_push($produtos, $produto);
	}
	return $produtos;
}

function removeProduto($conexao, $id) {
	$query = "DELETE FROM produtos WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
	$query = "SELECT * FROM produtos WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} WHERE id = '{$id}'";
	return mysqli_query($conexao, $query);
}