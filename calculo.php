<?php 

$mensagem = "";
if($_POST){ //criamos um if para validar se as varivesi estão recebendo algum numero para fazer o calculo
    $distancia = $_POST['distancia'];//aqui dizemos para o php que a varivel distancia deve receber o valor de _POST['distancia'] ou seja, o numero digitado pelo usuario sera atribuido a distancia
    $autonomia = $_POST['autonomia'];//mesmo processo feito acima se repete em baixo

    if(is_numeric($distancia) && is_numeric($autonomia)){ //aqui fazemos mais uma validação, ou seja, se valor do $_POST for numerico e valor da autonomia for numerico, executamos o codigo abaixo
        if($distancia > 0 && $autonomia > 0){ //fazemos mais uma validação, dessa vez para sabermos se o valor digitado pelo usuario é maior que zero, isso vai nos ajudar a não ter um erro caso ele digite algum dos valores como 0, já que não tem como calcular sem a ausencia de nenhum dos dois valores

    $valorGasolina = 4.80; //atribuimos um valor a cada tipo de combustivel
    $valorAlcool = 3.90;
    $valorDiesel = 2.40;

    $calculoGasolina = ($distancia / $autonomia) * $valorGasolina; // usamos uma variavel para fazer o calculo de tipo de combustivel
    $calculoGasolina = number_format($calculoGasolina, 2, ',', '.'); //usamos o number_format para dizer que iremos usar duas casas decimais depois do ponto, basicamente este comando faz com que a gente escolha a forma que queremos apresentar nosso numero
    $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
    $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');
    $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
    $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');

    $mensagem.= "<div class='sucesso'>";
    $mensagem.= "O valor total gasto será de:";
    $mensagem.= "<ul>";
    $mensagem.= "<li><b>Gasolina:</b> R$ ".$calculoGasolina."</li>";
    $mensagem.= "<li><b>Álcool:</b> R$ ".$calculoAlcool."</li>";
    $mensagem.= "<li><b>Diesel</b>: R$ ".$calculoDiesel."</li>";
    $mensagem.= "</ul>";
    $mensagem.= "</div>";
        }else{
			$mensagem.= "<div class='erro'>";
			$mensagem.= "<b>O valor da distância e da autonomia deve ser maior que zero.</b>";
			$mensagem.= "</div>";
        }
    }else{
		$mensagem.= "<div class='erro'>";
		$mensagem.= "<b>O valor recebido não é numérico</b>";
		$mensagem.= "</div>";
    }
} else{
    $mensagem.= "<div class='erro'>";
	$mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
	$mensagem.= "</div>";
}

   ?>
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
			<h2>Resultado do cálculo de consumo</h2>
			<div class="conteudo-painel">
				<?php
				echo $mensagem;
				?>
				<a class="botao" href="index.php">Voltar</a>
			</div>
		</div>
	</main>
</body>
</html>  

