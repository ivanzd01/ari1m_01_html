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

<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con los días de la semana y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2>
<form>
<input type="text" name="n_dia"/>;
<button onclick="seleccionar()"> seleccionar </button>
</form>
<div id="x" </div>
<?php
//arrays dias de la semana
$semana = [
	'No hay dia 0,sintax error',
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
	'No hay dia 8,sintax error',
	'No hay dia 9,sintax error',
];
?>
<?php
echo $semana[$_GET["n_dia"]];
?>
<script>
</script>