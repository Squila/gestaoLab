<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-usuario.php");?>
<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

//criação da query de inserção de dados

//comando pra executar a query
if(alteraUsuarios($conexao, $id, $nome, $usuario, $senha)){
    //funcionoua
	?>
	<p class="alert-success"> Usuário <?php echo $nome;?> alterado com sucesso!</p>
	<?php
	header("Location: usuarios-lista.php");
}else{
    //não funcionou

	?>
	<p class="alert-danger"> Usuário <?php echo $nome;?> não foi alterado!</p>

	<?php
}
?>
<?php
//comando pra fechar a conexão
mysqli_close($conexao);


?>



<?php include("rodape.php");?>