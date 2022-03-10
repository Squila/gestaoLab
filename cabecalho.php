<!DOCTYPE html>
<?php
error_reporting(0);
ini_set("display_errors", 0 );
?>
<?php include("conecta.php");?>
<?php include("logica-usuario.php");?>
<?php
$user_logado = usuarioLogado();
$user_resultado = mysqli_query($conexao, "select * from usuarios where usuario = '{$user_logado}'");
$user = mysqli_fetch_assoc($user_resultado);
?>
<html>
<head>
  <title>GESTAO</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
</head>
<body>
  <!--NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">GESTAO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="logout.php">Sair</a>
        </div>
      </div>
    </div>
    <!--Botao nome user-->
    <?php if(isset($_SESSION["usuario_logado"])){?>
      <ul class="nav justify-content-end">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
           <?php echo $user["nome"]; ?>
         </button>
         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="usuario-lista.php">Lista de Usuario</a></li>
          <li><a class="dropdown-item" href="#"></a>dddd</li>
          <li><a class="dropdown-item" href="logout.php">Sair</a></li>
        </ul>
      </div>
      <!--Botao nome user-->
    <?php }else{ ?>
    <!--Botao Login-->
    <a class="btn btn-primary" href="entrar.php" role="button">Login</a>
    <!--Botao Login-->
     <?php }?>
  </nav>
  <!--NAVBAR -->
  <div class="container">
    <div class="principal">