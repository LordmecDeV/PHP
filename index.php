<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Instruções</h2>
			<div class="conteudo-painel">
				<p>Esta aplicação tem como finalidade demonstrar os valores que
					serão gastos com combustível durante uma viagem, com base no
				consumo do seu veículo, e com a distância determinada por você!</p>
				<p>Os combustíveis disponíveis para este cálculo são:</p>
				<ul>
					<li><b>Álcool</b></li>
					<li><b>Díesel</b></li>
					<li><b>Gasolina</b></li>
				</ul>
			</div>
		</div>

		<div class="painel">
			<h2>Cálculo do valor (R$) do consumo</h2>
			<div class="conteudo-painel">
				<form action="calculo.php" method="POST"><!--Uma parte muito importamte no nosso codigo é o action e o form, o form ira definir qual arquivo back-end deve ser usado quando o botão for clicado, no nosso caso ainda não criado, mas sera o arquivo calculo.php que ira conter todo calculo para os dados digitados pelo usuario -->
					<label for="distancia">Distância em Quilômetros a ser percorrida</label>
					<input type="number" class="campoTexto"  name="distancia" required/>

					<label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
					<input type="number" class="campoTexto" name="autonomia" required/> <!-- O required é usado para não deixar o usuario continuar sem digitar os dados no input, como o front-end é facilmente manipulado pelo usuario, criamos uma validação no back end para que caso seja alterado o "type" de number para text. ele apresente a mensagem de erro-->

					<button class="botao" type="submit">Calcular</button>
				</form>
			</div>
		</div>

	</main>
</body>
</html>
