<?php
function listaTecnico($conexao){
		$tecnico = array();
		//conexao, query
	$resultado = mysqli_query($conexao, "select * from tecnico");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($tecnico, $produto);
		}
		return $tecnico;
	}
function insereProduto($conexao, $nomeTecnico){
	$query = "insert into produtos (nomeTecnico)  values ('{$nomeTecnico}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}

function removeTecnico($conexao, $codigoTecnico){
	$query = "delete from produtos where codigoTecnico = {$codigoTecnico}";
	return mysqli_query($conexao, $query);
}

function buscaTecnico($conexao, $codigoTecnico){
	$query = "select * from produtos where codigoTecnico = {$codigoTecnico}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $codigoTecnico, $nomeTecnico){
	$query = "update produtos set nome = '{$nomeTecnico}' where id = '{$id}'";
	return mysqli_query($conexao, $query);
}

?>