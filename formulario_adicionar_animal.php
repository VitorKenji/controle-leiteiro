<?php 
	include("cabecalho.php");
	include("conexao.php");
	include("animal_controler.php");
?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<form action="adicionar_animal.php" method="post">
				<fieldset>
					<legend>Dados do animal</legend>
					<div class="container-fluid">
						Nome do animal <input type="text" name="nome"><br>
						Número brinco <input type="number" name="brinco"><br>
						Origem do animal<br>
						<input type="radio" value="monta" name="origem">Monta<br>
						<input type="radio" value="inseminacao" name="origem">Inseminação<br>
						Data de nacimento <input type="date" name="nacimento"><br>
						Peso ao nacer <input type="number" name="peso_nacenca"><br>
						Peso de desmama <input type="number" name="peso_desmama"><br>
						Cor do pelo<br>
						<div class="container">
							<input type="radio" name="cor" value="amarelo"> amarelo
							<input type="radio" name="cor" value="preto"> preto
							<input type="radio" name="cor" value="branco"> branco
							<input type="radio" name="cor" value="malhado"> malhado
							<input type="radio" name="cor" value="vermelho"> vermelho
						</div>
						Raça do animal <input type="text-field" name="raca"><br>
						Idade <input type="number" name="idade"><br>
						Sexo<br>
						<div class="container">
							<input type="radio" name="sexo" value="femea">femea<br>
							<input type="radio" name="sexo" value="macho">macho<br>	
						</div>
						<input type="submit" value="Salvar" class="btn btn-primary"><br>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="col-lg-6">
		</div>
	</div>
	
</div>
<?php
	include("rodape.php");
?>