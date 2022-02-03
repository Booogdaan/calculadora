<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
</head>
<body>
	<form action="calculoNumeros.php" method="get">
		<label>Introduce el primer numero: </label><br><br>
		<input type="text" name="numero1" step="any"><br><br>
		<label>Introduce el segundo numero: </label><br><br>
		<input type="text" name="numero2" step="any"><br><br>
		<label>Selecciona una opcion: </label><br><br>
		
		<select name="opcion">
			<option value="default">Selecciona una opcion...</option>
			<option value="Sumar">Sumar</option>
			<option value="Restar">Restar</option>
			<option value="Multiplicar">Multiplicar</option>
			<option value="Dividir">Dividir</option>
		</select>
		<br><br>
		<input type="submit" value="Enviar palabra">
	</form>
</body>
</html>
