<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-usuario.php");?>
<h1>Bem-vindo</h1>
<img class="mb-4" src="img/login.jpg" alt="" width="72" height="72">
<?php
if(isset($_GET["falhaDeSeguranca"])){
	?>
	<p class="alert alert-danger">Você não tem acesso a esta funcionalidade! Favor fazer o login.</p> 
	<?php
}
?>
<?php
if(isset($_GET["login"]) && $_GET["login"] == true){
	?>
	<p class="alert alert-success">Logado com sucesso!</p>
	<?php
}
?>
<?php
if(isset($_GET["login"]) && $_GET["login"] == false){
	?>
	<p class="alert alert-danger">Usuario ou senha incorreto!</p>
	<?php
}
?>
<?php
if(isset($_GET["logout"]) && $_GET["logout"] == true){
	?>
	<p class="alert alert-success">Você saiu do sistema!</p>
	<?php
}
?>
<h2>Login</h2>
<?php if(array_key_exists('cadastro', $_GET) && $_GET["cadastro"] == true){
?>
<p class="alert alert-success">Cadastro efetuado com saucesso!</p>
<?php
}
?>
<?php
if(usuarioEstaLogado()){
	?>
	<p class="text-success">Você está logado como <?php echo usuarioLogado(); ?></p>
	<a class="btn btn-danger" href="logout.php">Sair</a>
	<?php
}else{
	?>	
	<form action="login.php" method="post">
		<div class="row">

			<div class="col-md-3">

			</div>
			<div class="col-md-3">
				Usuario
			</div>
			<div class="col-md-3">
				<input class="form-control" type="text" name="usuario" placeholder="Digite o Usuario">
			</div>
			<div class="col-md-3">

			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-3">

			</div>
			<div class="col-md-3">
				Senha
			</div>
			<div class="col-md-3">
				<input class="form-control" type="password" name="senha" placeholder="Digite a senha">
			</div>
			<div class="col-md-3">

			</div>
		</div>
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" value="Entrar">
				<a href="usuario-formulario.php" class="btn btn-warning" type="submit">Cadastrar Usuario </a>
			</div>
		</div>
	</form>
	<?php
}
?>
<?php include("rodape.php");?>		