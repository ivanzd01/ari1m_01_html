<center><h1>Ejercicio 1</h1></center>
<h2>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<?php
//arrays
$mes = [
	'No hay mes 0.',
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
];
?>
<form>
<button onclick="seleccionar()"> seleccionar </button>
<?php
$txt='<select name="n_mes">';
for ($i=1; $i<= 12; $i++)
	$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<?php
echo $mes[$_GET["n_mes"]];
?>
<div id="x" </div>
<div id="r" </div>

<script>
mes = [
	'No hay mes 0.',
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
]

console.log(i);
document.getElementById('i').innerHTML =txt;
</script>