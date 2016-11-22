<?php  include("cabecalho.php");
include("conecta.php");
include("banco-produto.php"); ?>

<?php
$nome= $_GET["nome"];
$preco = $_GET["preco"];

$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereProduto($conexao, $nome, $preco)) { ?>
	 <p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi adicionado com sucesso!</p>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>
<?php 
}
?>

<?php include("rodape.php"); ?>