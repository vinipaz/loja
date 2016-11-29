<?php
//Inclui o cabeçalho
include("cabecalho.php");
//Conexão com o banco
include("conecta.php");
//Funções da tabela de categorias
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";

?>

		<h1>Alterando produto</h1>

	<!--Adiciona oproduto pelo metodo POST-->
	<form action="altera-produto.php" method="post">
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br /></td>
		</tr>
		<tr>
			<td>Preço:</td>
			<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br /></td>
		</tr>
		<tr>
			<td>Descricao</td>
			<td><textarea class="form-control" name="descricao" value="<?=$produto['descricao']?>"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="usado" <?=$usado?> value="true">Usado
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
				<select name="categoria_id" class="form-control">
					<?php foreach($categorias as $categoria) :
						$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
						$selecao = $essaEhACategoria ? "selected='selected'" : "";
					?>
						<option value="<?=$categoria['id']?>" <?=$selecao?>>
							<?=$categoria['nome']?>
						</option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" name="Alterar"></td>
		</tr>	

	</form>

<!--Inclui o rodape-->
<?php include("rodape.php") ?>