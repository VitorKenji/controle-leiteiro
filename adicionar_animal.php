<?php

	include("cabecalho.php");
	include("conexao.php");
	include("animal_controler.php");

	$nome = $_POST["nome"];
	$brinco = $_POST["brinco"];
	$origem = $_POST["origem"];
	$data_nacimento = $_POST["nacimento"];
	$peso_nacenca = $_POST["peso_nacenca"];
	$peso_desmama = $_POST["peso_desmama"];
	$cor = $_POST["cor"];
	$raca = $_POST["raca"];
	$idade = $_POST["idade"];
	$genero = $_POST["sexo"];

	$animal = array();

	if($genero == "femea"){
		if(adicionar_animal($conexao, $nome, $brinco, $origem, $data_nacimento, $peso_nacenca, $peso_desmama, $cor, $raca, $idade)){
			?>
			<p>animal adicionado</p>
			<?php
			$animal = busca_animal($conexao, $brinco);
			print_r($animal["id"]);
			adicionar_vaca($conexao, $animal["id"]);

		}
	}

	if(adicionar_vaca($conexao, $nome, $brinco, $origem, $data_nacimento, $peso_nacenca, $peso_desmama, $cor, $raca, $idade)){
	?>
		<p>animal adicionada</p>
		<a href="index.php">Voltar</a>
	<?php
	} else {
		$mensagem = mysqli_error($conexao) ?>
		<p><?= $mensagem ?></p>
	<?php
	}

	include("rodape.php");
?>