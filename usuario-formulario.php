<?php
//Inclui o cabecalho
include("cabecalho.php");
//Conecta com o banco de dados
include("conecta.php");

?>

<h1>Cadastro de Usuário</h1>

	<form action="adiciona-usuario.php" method="POST">
		<table class="table">
			
		</table>
	</form>
<!-- <html>
<head>
	<title>Cadastro de Usuário</title>
</head>
<body>
	<form method="POST" action="adiciona-usuario.php">
		<label>Login:</label>
		<input type="text" name="login" id="login">
		<label>Senha:</label>
		<input type="text" name="senha" id="senha">

		<input type="submit" name="cadastrar" value="Cadastrar" id="cadastrar">
	</form>
</body>
</html> -->

<!--Inclui o rodape-->
<?php include("rodape.php"); ?>