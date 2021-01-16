<h1> Ejercicio 1 </h1><image height=60% src="1.png"/>
<h2>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Para rodear el jardín con una valla, ¿cuántos m lineales son necesarios?</h2>
<form>
Radio fuente<input id="R" name="R" placeholder="Radio fuente" value="4" onkeyup="determinar()"/>
Ancho jardín<input id="r" name="r" placeholder="Ancho jardin" value="1" onkeyup="determinar()"/>
<button onclick="determinar()"> determinar </button>
</form>
<div id="X" style="
padding:20px;
">
Resultado
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function determinar(){
	R=document.getElementById("R").value;
	r=document.getElementById("r").value;
	r=parseInt(r);
	R=parseInt(R);
	X= 2*Math.PI*(R+r);
	document.getElementById('X').innerHTML= X+'metros lineales son necesarios.';
	}determinar();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?><h1> Ejercicio 2 </h1><image height=60% src="2.png"/>
<h2> Una pirámide cuadrada tiene por perímetro de la base 60 cm. Calcula el volumen si la altura es de 25 cm</h2>
<form>
Perimetro<input id="p" name="p" placeholder="Perimetro" value="60" onkeyup="resolver()"/>
Altura<input id="h" name="h" placeholder="Altura" value="25" onkeyup="resolver()"/>
<button onclick="resolver()"> resolver </button>
</form>
<div id="b" style="
padding:20px;
">
Resultado
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function resolver(){
	p=document.getElementById("p").value;
	h=document.getElementById("h").value;
	b=(((1/3)*(p)*(h))/4);
	document.getElementById('b').innerHTML= b+'centimetros es el volumen.';
	}resolver();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>
<h1>Ejercicio 3</h1>
<h2>Una tienda ha vendido 60 ordenadores, cuyo precio original era de 1200 EUR, con un descuento del 20% a unos y del 25% a otros. Si se han recaudado 56.400 EUR, calcule a cuántos ordenadores se les rebajó el 25%</h2>
<form>
Total ordenadores <input id="s" name="s" placeholder="total ordenadores" value="60" onkeyup="resolver2()"/>
precio<input id="u" name="u" placeholder="precio" value="1200" onkeyup="resolver2()"/>
Porcentaje descuento 1<input id="m" name="m" placeholder="d1" value="0.20" onkeyup="resolver2()"/>
Porcentaje descuento 2<input id="i" name="i" placeholder="d2" value="0.25" onkeyup="resolver2()"/>
Total venta<input id="y" name="y" placeholder="venta" value="56400" onkeyup="resolver2()"/>
<button onclick="resolver2()">resolver2</button>
</form>
<div id="t" style="
	padding:20px;
">
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function resolver2(){
	s=document.getElementById('s').value;
	u=document.getElementById('u').value;
	m=document.getElementById('m').value;
	i=document.getElementById('i').value;
	y=document.getElementById('y').value;
	parseInt(s);
	parseInt(u);
	parseInt(m);
	parseInt(i);
	parseInt(y);
	ordenadores=(((y/u)+(s*m)-s))/(m-i);
	document.getElementById('ordenadores').innerHTML=ordenadores+' ordenadores con descuento 2';
}
resolver2();
</script>
<?php
if(isset($_GET['s'])){
	$s = $_GET['s'];
	$u = $_GET['u'];
	$m = $_GET['m'];
	$i = $_GET['i'];
	$y= $_GET['y'];

	echo 'Ordenadores con descuento del 25%: '.((($y/$u)+($s*$m)-$s)/($m-$i));
}
?>
<h1> Ejercicio 4 <h1/><image height=60% src="4.png"/>
<h2> Se dispone de un cartón cuadrado de 50 cm de lado para construir una caja sin tapa a partir de ese cartón. Para ello, se corta un cuadrado de x cm de lado en cada una de las esquinas. Halla el valor de x para que el volumen de la caja sea máximo y calcula dicho volumen </h2>
<form>
Lado caja<input id="q" name="q" placeholder="Lado caja" value="50" onkeyup="calcular()" />
<button onclick="calcular()"> Calcular </button>
</form>
<div id="g" style="
padding:20px;
">
Resultado 
</div>
<div id="ma" style="
padding:20px;
">
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function calcular(){
	q=document.getElementById("q").value;
	g= 1/(12*q);
	ma= g*(q-2*g)**2;
	document.getElementById('g').innerHTML= g+' centimetros';
	document.getElementById('ma').innerHTML= ma+' centimetros cubicos';
	}calcular();
</script>
<?php
if(isset($_GET)) print_r($_GET);
?>