<center><h1>Ejercicio 3</h1></center>
<h2>Almacena en un array la tabla de multiplicar del 6 y muestra el contenido del array</h2>
<form>
<input type="text" name="n_dia"/>;
<button onclick="seleccionar()"> seleccionar </button>
</form>
<div id="x" </div>
<?php
//arrays dias de la semana
$tabla = [
	'0',
	'6',
	'12',
	'18',
	'24',
	'30',
	'36',
	'42',
	'48',
	'54',
	'60',
];
?>
<?php
echo $tabla[$_GET["n_dia"]];
?>