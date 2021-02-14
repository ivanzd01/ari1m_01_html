<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=2">
</head>
<? php
if(!isset($_GET['n_mes'])) $_GET['n_mes']=1; 
?>
<center><h1>Ejercicio 1</h1></center>
<center><h2>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2></center>
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
$txt='<select name="n_mes" id="x" onchange="determinar()">';
for ($i=1; $i<= 12; $i++)
	$txt.='<option>'.$i.'</option>';
$txt.='</select>';
echo $txt;
?>
</form>
<div style="background-color:pink;"id="meses">resultado j</div>
<?php
echo $mes[$_GET["n_mes"]];
?>
<div id="x" </div>
<script>
function  determinar(){
mes  =  [
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
] ;
meses= document.getElementById('x').value ;

document.getElementById('meses').innerHTML= mes[meses-1];
}
determinar();
</script>
<?php
if (!isset($_GET["semana"]))
	$_GET["semana"]=1;
?>
<center><h1>Ejercicio 2</h1></center>
<center><h2>Crea un array con los días de la semana y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2></center>
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
<center><h1>Ejercicio 3</h1></center>
<center><h2>Almacena en un array la tabla de multiplicar del 6 y muestra el contenido del array</h2></center>
<pre>
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
$tabla=[];
for($i=0; $i <100; $i++){ 
$tabla[]=6*$i;
}
print_r ($tabla);
?>
<div  id="i"></div>
</pre>

<script>
tabla=[];
for(i = 0;i<=100;i++){
	tabla[i]=6*i;
} console.log(tabla);
//document.getElementById('i').innerHTML =tabla[i];
txt='';
for(i in tabla)
txt+='6x'+ i+ ' = '+ tabla[i] + '<br/>';
document.getElementById('i').innerHTML =txt;
</script>

