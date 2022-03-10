<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-usuario.php");?>
<?php
$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

//criação da query de inserção de dados


if(insereUsuarios($conexao, $nome, $usuario, $senha)){
    //funcionou
    ?>
    <p class="alert-success"> Usuário <?php echo $nome;?>, cadastrado com sucesso!</p>
    <?php
    header("Location: index.php?cadastro=true");
    //header("Location: ci-formulario.php");
}else{
    //não funcionou
    ?>
    <p class="alert-danger"> Usuário <?php echo $nome;?>  não foi cadastrado!</p>
    <?php
}
?>
<?php
//comando pra fechar a conexão
mysqli_close($conexao);

?>

<?php include("rodape.php");?>