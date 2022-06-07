<!DOCTYPE html>
<html>
<head>
	
	<title>IMC</title>
</head>
<body>
	<?php 
if(isset($_GET['peso'])){
	echo "<h2>seu peso é " , $_GET['peso']. '<h2>';
}
?>
<form method="get">
    <label for="campo_de_nome">Digite seu Peso</label>
    <input name="peso" id="pesos" type="float"/>
    <button type="submit">Enviar</button>
</form>
	<form method = "post">

		<p><input type="checkbox" name="peso[]" value="Muito Magro, precisa de alimentar melhor" /> 1 até 18.5</p>
		<p><input type="checkbox" name="peso[]" value="Saudável, seu peso está de parabéns!" /> De 18.51 até 24.9</p>
		<p><input type="checkbox" name="peso[]" value="Sobrepeso, precisa perder uma gordurinha" /> De 25.0 até 29.9</p>
		<p><input type="checkbox" name="peso[]" value="Obesidade1, precisa praticar mais exercicios e de uma alimentação mais saudável." /> De 30.0 até 34.9</p>
		<p><input type="checkbox" name="peso[]" value="Obesidade2, precisa ir num especialista,nutricionista, o mais rápido possível" /> De 35.0 até 39.9</p>
		<p><input type="checkbox" name="peso[]" value="ATENÇÃO! Obesidade3, você precisa ir no especialista URGENTE!" /> Acima de 40.0</p>

		<p><input type="submit" name="submit" value="Peso" /></p>
	</form>
</body>
</html>
<?php 
if(isset($_POST["submit"]))
{
	if(!empty($_POST["peso"]))
	{
		echo '<h3> Você está com peso:</h3>';
		foreach ($_POST["peso"] as $peso ) {
			// code...
		}
		{
			echo '<p>'.$peso.'</p>';
		}
	}
	else
	{
		echo 'porfavor selecione seu peso';
	}
}
?>