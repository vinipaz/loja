<?php
//Inclui o cabecalho
include("cabecalho.php");
//Conecta com o banco de dados
include("conecta.php");
//Funções da tabela produto
include("banco-produto.php");
include("class/Produto.php");
include("class/Categoria.php");
?>

<!--Variaveis no metodo POST-->
<?php

$produto = new Produto;
$categoria = new Categoria;

$categoria->id = $_POST['categoria_id'];
$produto->nome = $_POST["nome"];
$produto->getPreco($_POST["preco"]);
$produto->descricao = $_POST["descricao"];
$produto->categoria = $categoria;
//Checkbox precisam de verificação, pois se enão for selecionado não é enviado e quebra o código
if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

$produto->usado = $usado;

//Verificação para dizer se cadastrou ou não o produto
if(insereProduto($conexao, $produto)) { ?>
	 <p class="text-success">O produto <?= $produto->nome ?>, <?= $produto->preco ?> foi adicionado com sucesso!</p>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>
<?php 
}
?>

<!--Inclui o rodape-->
<?php include("rodape.php"); ?>