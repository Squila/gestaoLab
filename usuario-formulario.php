<?php include("cabecalho.php");?>

    <form action="adiciona-usuario.php" method="post">
        <h1>Cadastro de Usuários</h1>
        
        <table class="table">
            <tr>
                <td>Informe o nome:</td>
                <td><input type="text" name="nome" class="form-control" placeholder="Digite o nome"></td>
            </tr>
            <tr>
                <td>Informe o usuário:</td>
                <td><input type="text" name="usuario" class="form-control" placeholder="Digite o usuário"></td>
            </tr>
            <tr>
                <td>Informe a senha:</td>
                <td><input type="password" name="senha" class="form-control" placeholder="Digite a senha"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="ADD" value="Enviar" class="btn btn-primary"> 
                </td>
            </tr>
        </table>
    </form>
    
<?php include("rodape.php");?>