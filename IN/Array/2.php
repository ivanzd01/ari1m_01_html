<?php
if (!isset($_GET["semana"]))
	$_GET["semana"]=1;
?>
<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con los días de la semana y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2>
<form>
<input value="<?=$_GET['semana']?>" type="text" name="semana" id ="ndia" onkeyup="calcular();"/>
<button> seleccionar </button>
</form>
<div style="background-color:pink;"id="dia">resultado </div>
<?php
//arrays dias de la semana
$semana = [
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
	];
echo $semana[$_GET["semana"]-1];
?>
<script>
function  calcular(){
semana  =  [
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
] ;
dia= document.getElementById('ndia').value ;
document.getElementById('dia').innerHTML= semana[dia-1];
}
calcular();
</script>