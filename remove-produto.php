<?php
//Inclui o cabecalho
include("cabecalho.php");
//Conecta ao banco
include("conecta.php");
//Funções da tabela produtos
include("banco-produto.php");

//Remove o produto com base no id
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();
?>