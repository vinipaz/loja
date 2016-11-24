<?php
//Inclui o cabecalho
include("cabecalho.php");
//Conecta com o banco de dados
include("conecta.php");
//Funções da tabela produto
include("banco-produto.php");
?>

<!--Variaveis no metodo POST-->
<?php
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
//Checkbox precisam de verificação, pois se enão for selecionado não é enviado e quebra o código
if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

//Verificação para dizer se cadastrou ou não o produto
if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
	 <p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi adicionado com sucesso!</p>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>
<?php 
}
?>

<!--Inclui o rodape-->
<?php include("rodape.php"); ?>