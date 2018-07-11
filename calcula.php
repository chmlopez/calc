<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operaciones</title>
</head>
<body>


		<fieldset>
			<legend>Cuentas</legend>
			<form action="" method="POST">
				<label for="C1">Cuenta Nacion</label>
				<input type="number" name="n1" required>
				<br><br>
				<label for="C2">Cuenta Provincia</label>
				<input type="number" name="C2" required>
				<br><br>
				<label for="C3">Cuenta Santander Rio</label>
				<input type="number" name="C3" required>
				<br><br>
				<label for="C4">Cuenta Frances</label>
				<input type="number" name="C4" required>
				<br><br>
				<label for="C5">Cuenta Mercado Pago</label>
				<input type="number" name="C5" required>
				<br><br>
				<label for="C6">Efectivo</label>
				<input type="number" name="C6" required>

			<label for="operaciones">Cálculos</label>
			<select name="operaciones" id="opr">
				<option value="sumar">Sumar</option>
				<option value="restar">Restar</option>
				<option value="multiplicar">Multiplicar</option>
				<option value="dividir">Dividir</option>
			</select>
				<br>
			<input type="submit" name="enviar" value="Calcular">

			</form>
		</fieldset>

<h1>Resultados</h1>

<?php

if(isset($_POST["enviar"])) {

$C1=$_POST['C1'];
$C2=$_POST['C2'];
$C3=$_POST['C3'];
$C4=$_POST['C4'];
$C5=$_POST['C5'];
$C6=$_POST['C6'];
$opc=$_POST['operaciones'];

	switch ($opc) {
			case'sumar': 
			$resultado = $C1+$C2+$C3+$C4+C5+C6;
			echo "La suma es igual a " .$resultado;
			break;
			default:
			echo "Error..."
		}
	
}

?>
</body>
</html>