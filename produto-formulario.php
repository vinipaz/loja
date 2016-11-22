<?php  include("cabecalho.php") ?>

		<h1>Formulário de produto</h1>

<!-- A action do form é para mandar para a página adiciona-produto-->
	<form action="adiciona-produto.php">
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
			<td><input class="btn btn-primary" type="submit" name="Cadastrar"></td>
		</tr>	

	</form>

<?php include("rodape.php") ?>