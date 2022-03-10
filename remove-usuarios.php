<?php include("conecta.php");?>
<?php include("cabecalho.php");?>
<?php include("banco-usuario.php");?>

<?php
$id = $_GET["id"];

removeUsuario($conexao, $id);

header("Location: usuarios-lista.php?removido=true");
?>

<?php include("rodape.php");?>