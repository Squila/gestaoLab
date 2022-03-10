<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-usuario.php");?>
<?php


$usuarios = listaUsuarios($conexao);


?>
<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
    ?>
    <p class="text-success">Usuário apagado com sucesso!</p> <?php
}
?>
<?php
$user_logado = usuarioLogado();
$user_resultado = mysqli_query($conexao, "select * from usuarios where usuario = '{$user_logado}'");
$user = mysqli_fetch_assoc($user_resultado);
?>
<h1>Lista de Usuários</h1><br>
<table class="table table-striped table-bordered">
    <tr>
        <td colspan="9">
            <form class="form-inline" action="busca-usuario.php" method="post">
                <div class="form-group mb-2">
                    <b>Buscar Usuário:</b>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" name="palavra" class="form-control" placeholder="Nome do usuário">
                </div>
                <button type="submit" class="btn btn-dark mb-2">Buscar</button>
            </form>
        </td>
    </tr>
    <tr>

        <td><b>Nome</b></td>
        <td><b>Usuário</b></td>
    </tr>
    <?php
    foreach ($usuarios as $usuario) {
        ?>
        <tr>
            <td><?php echo $usuario["nome"];?></td>
            <td><?php echo $usuario["usuario"];?></td>
            <td><a href="remove-usuarios.php?id=<?php echo $usuario['id']?>" class="btn btn-danger">remover</a></td>
            <td><a href ="usuario-altera-formulario.php?id=<?php echo $usuario['id']?>" class="btn btn-primary"> alterar</td>
        </tr>
        <?php
    }
    ?>
</table>

<?php include("rodape.php");?>