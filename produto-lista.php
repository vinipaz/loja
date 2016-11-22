<?php  include("cabecalho.php"); ?>
<?php  include("conecta.php");

$resultado = mysqli_query($conexao, "SELECT * FROM produtos");
while($produto = mysqli_fetch_assoc($resultado)) {
echo $produto['nome'] . "<br/>";	
}
?>

<?php include("rodape.php"); ?>