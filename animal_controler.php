<?php
 	
	function adicionar_animal($conexao, $nome, $brinco, $origem, $data_nacimento, $peso_nacenca, $peso_desmama, $cor, $raca, $idade){

		$query = "insert into animal (nome, brinco, origem, nacimento, peso_nacenca, peso_desmama, cor, raca, idade)
		values ('{$nome}', {$brinco}, '{$origem}', '{$data_nacimento}', '{$peso_nacenca}', {$peso_desmama}, '{$cor}', '{$raca}', {$idade})";

		return mysqli_query($conexao, $query);
	}

	function adicionar_vaca($conexao, $id){

		$query = "insert into vaca (id) values ('{$id}');";
		return mysqli_query($conexao, $query);
	}

	function busca_animal($conexao, $brinco){

		$animal = array();
		$query = mysqli_query($conexao, "select id from animal where '{$brinco}' = brinco;");

		$animal = mysqli_fetch_assoc($query);

		return $animal;
	}

	function listar_vacas($conexao){
		$rebanho = array();
		$query =mysqli_query($conexao, "select * from gado");
		while($vaca = mysqli_fetch_assoc($query)){
			array_push($rebanho, $vaca);
		}
		return $rebanho;
	}

?>