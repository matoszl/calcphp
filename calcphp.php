<!DOCTYPE html>
<html>
<head>
	<title>Calculadora PHP</title>
</head>
<body>
	<h2>Calculadora PHP</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Primeiro número:</label>
		<input type="number" name="num1" required><br><br>
		<label>Segundo número:</label>
		<input type="number" name="num2" required><br><br>
		<label>Operação:</label>
		<select name="operacao">
			<option value="+">Adição</option>
			<option value="-">Subtração</option>
			<option value="*">Multiplicação</option>
			<option value="/">Divisão</option>
		</select><br><br>
		<input type="submit" name="submit" value="Calcular">
	</form>
	<?php
		if(isset($_POST['submit'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operacao = $_POST['operacao'];
			switch($operacao){
				case "+": echo "Resultado: " . ($num1 + $num2); break;
				case "-": echo "Resultado: " . ($num1 - $num2); break;
				case "*": echo "Resultado: " . ($num1 * $num2); break;
				case "/": echo "Resultado: " . ($num1 / $num2); break;
			}
		}
	?>
</body>
</html>
