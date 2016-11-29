<?php
//Inclui o cabeçalho
include("cabecalho.php");
//Conexão com o banco
include("conecta.php");
//Funções da tabela de categorias
include("banco-categoria.php");

$categorias = listaCategorias($conexao);

?>

		<h1>Formulário de produto</h1>

	<!--Adiciona oproduto pelo metodo POST-->
	<form action="adiciona-produto.php" method="post">
		<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome"><br /></td>
		</tr>
		<tr>
			<td>Preço:</td>
			<td><input class="form-control" type="number" name="preco"><br /></td>
		</tr>
		<tr>
			<td>Descricao</td>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="usado" checked="checked" value="true">Usado
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
				<!--Lista cada categoria cadastrada no banco como radio button-->
				<?php // foreach($categorias as $categoria) : ?>
					 <!-- <input type="radio" name="categoria_id"
						value="<?=$categoria['id']?>">
						<?=$categoria['nome']?><br/> --> 
				<?php // endforeach ?>
				<!--Selecionar no combobox-->
				<select name="categoria_id" class="form-control">
					<?php foreach($categorias as $categoria) : ?>
						<option value="<?=$categoria['id']?>">
							<?=$categoria['nome']?>
						</option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" name="Cadastrar"></td>
		</tr>	

	</form>

<!--Inclui o rodape-->
<?php include("rodape.php") ?>