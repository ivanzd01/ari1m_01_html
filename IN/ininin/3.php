<h1>Ejercicio 3</h1><image height=60% src="imagenes/ordenadores.jpg"/></center></center>
<h2>Una tienda ha vendido 60 ordenadores, cuyo precio original era de 1200 EUR, con un descuento del 20% a unos y del 25% a otros. Si se han recaudado 56.400 EUR, calcule a cuántos ordenadores se les rebajó el 25%</h2>
<form>
número total de ordenadores <input placeholder="número total de ordenadores" 
	value="60" id="n" name="n" onkeyup="calcular3()"/>
	
precio unitario <input placeholder="precio unitario" 
	value="1200" id="p" name="p" onkeyup="calcular3()"/>
	
descuento1 "%"<input placeholder="descuento 1" 
	value="0.20" id="d1" name="d1" onkeyup="calcular3()"/>
	
descuento2 "%"<input placeholder="descuento 2" 
	value="0.25" id="d2" name="d2" onkeyup="calcular3()"/>	
	
valor venta total <input placeholder="valor venta total%"
	value="56400"/ id="e" name="e" onkeyup="calcular3()">
	
<button onclick="calcular3()">Calcular</button>

</form>
<div id="ordenadores" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular3(){
	n=document.getElementById('n').value;
	p=document.getElementById('p').value;
	d1=document.getElementById('d1').value;
	d2=document.getElementById('d2').value;
	e=document.getElementById('e').value;
	parseInt(n);
	parseInt(p);
	parseInt(d1);
	parseInt(d2);
	parseInt(e);
	ordenadores=(((e/p)+(n*d1)-n))/(d1-d2);
	document.getElementById('ordenadores').innerHTML=ordenadores+' ordenadores con descuento 2';
}
calcular3();
</script>
<?php
if(isset($_GET['n'])){
	$n = $_GET['n'];
	$p = $_GET['p'];
	$d1 = $_GET['d1'];
	$d2 = $_GET['d2'];
	$e= $_GET['e'];

	echo 'Ordenadores con descuento 25%: '.((($e/$p)+($n*$d1)-$n)/($d1-$d2));
}
?>