<center><h1>Ejercicio 3</h1></center>
<h2>Almacena en un array la tabla de multiplicar del 6 y muestra el contenido del array</h2>
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

