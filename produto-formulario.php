<?php  include("cabecalho.php") ?>

		<h1>Formulário de produto</h1>

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
			<td><input class="btn btn-primary" type="submit" name="Cadastrar"></td>
		</tr>	

	</form>

<?php include("rodape.php") ?>