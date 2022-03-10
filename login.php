<?php include("conecta.php");?>
<?php include("banco-usuario.php");?>
<?php include("logica-usuario.php");?>
<?php
$usuario = buscaUsuario($conexao, $_POST["usuario"], $_POST["senha"]);	

if($usuario == null){
	header("Location: index.php?login=0");
}else{
	logaUsuario($usuario["usuario"]);
	header("Location: index.php?login=1");
}

?>