<?php
	include("cabecalho.php");
	include("conexao.php");
	include("vaca_controler.php");

	$rebanho = listar_vacas($conexao);

	foreach($rebanho as $vaca){
	?>
	<div class="container">
		<ul>
			<li>
				<?= $vaca["id"]; ?>
			</li>
			<li>
				<?= $vaca["nome"]; ?>
			</li>
			<li>
				<?= $vaca["cor"]; ?>
			</li>
		</ul>
		
	</div>
	<?php
	}

	include("rodape.php");
?>