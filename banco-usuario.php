<?php 
function buscaUsuario($conexao, $usuario, $senha){
    $senhaMd5 = md5($senha);
    $query = "select * from usuarios where usuario = '{$usuario}' and senha = '{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $user = mysqli_fetch_assoc($resultado);
    return $user;
}

function insereUsuarios($conexao, $nome, $usuario, $senha){
    $query = "insert into usuarios (nome, usuario, senha) values ('{$nome}', '{$usuario}', '{$senha}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listaUsuarios($conexao){
    $usuarios = array();
    //$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p JOIN categorias as c on c.id=p.categoria_id");
    $resultado = mysqli_query($conexao, "select * from usuarios");
    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

function removeUsuario($conexao, $id){
    $query = "delete from usuarios where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaUsuarios($conexao, $id){
    $query = "select * from usuarios where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);

}

function alteraUsuarios($conexao, $id, $nome, $usuario, $senha){
    $query = "update usuarios set nome = '{$nome}', usuario = '{$usuario}', senha = '{$senha}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

?>