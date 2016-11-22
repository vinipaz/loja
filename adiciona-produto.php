<?php  include("cabecalho.php"); ?>

<?php
function insereProduto($conexao, $nome, $preco) {
	//Insert no banco de dados a partir do formulario
	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
	return mysqli_query($conexao, $query);
}
//Variáveis
$nome= $_GET["nome"];
$preco = $_GET["preco"];
//<!--Conexao com o banco de dados passando o ip, usuario, senha e nome do banco-->
$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereProduto($conexao, $nome, $preco)) { ?>
<!--ALERT(Muda a cor do background) / TEXT(Muda a cor do texto)-->
	 <p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi adicionado com sucesso!</p>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>
<?php 
}
?>

<?php include("rodape.php"); ?>