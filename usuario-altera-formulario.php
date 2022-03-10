<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-usuario.php");?>
<?php
$id = $_GET["id"];
$usuario = buscaUsuarios($conexao, $id);
?>
<form action="altera-usuario.php" method="post">
	<h1>Alteração de Usuários</h1>
	<table class="table">
		<tr>
			<td>Informe o nome:</td>
			<td><input type="text" name="nome" class="form-control" placeholder="Digite o nome" value="<?php echo $usuario['nome'];?>"></td>
		</tr>
		<tr>
			<td>Informe o usuário:</td>
			<td><input type="text" name="usuario" class="form-control" placeholder="Digite o usuário" value="<?php echo $usuario['usuario'];?>"></td>
		</tr>
		<tr>
			<td>Informe a senha:</td>
			<td><input type="password" name="senha" class="form-control" placeholder="Digite a senha"></td>
		</tr>
	</select>
</td>
</tr>
<input type="hidden" name="id" value="<?php echo $usuario['id'];?>">
<tr>
	<td><input class="btn btn-primary" type="submit" value="Alterar"></td>
</tr>
</table>
</form>
<?php include("rodape.php");?>