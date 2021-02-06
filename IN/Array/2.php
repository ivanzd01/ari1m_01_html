<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con los días de la semana y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2>
<form>
<input type="text" name="dia"/>
<button onclick="seleccionar()"> seleccionar </button>
</form>
<div id="dia" </div>
<?php
//arrays dias de la semana
if (!isset($_GET["semana"]))
$_GET["semana"]=1;
$semana = [
	'No hay dia 0 sintax error',
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
	];
echo $semana[$_GET["dia"]];
?>

<script >
semana  =  [
	'No hay dia 0 sintax error',
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
] ;
function  mostrar(){
semana= document.getElementById('dia').value ;
document.getElementById('dia').innerHTML= semana[semana-1];
}
mostrar();
</script >