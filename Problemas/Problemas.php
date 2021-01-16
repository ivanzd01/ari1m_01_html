<h1> Ejercicio 2 <h1/>
<h2> Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. ¿Qué superficie ocupa la fuente? </h2>
<form>
Diametro<input id="d" name="d" placeholder="diametro fuente" value="4" onkeyup="calcular()" />
Ancho<input id="a" name="a" placeholder="ancho alrededor" value="1" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular </button>
</form>
<div id="perimetro" style="
padding:20px;
">
Resultado 
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function calcular(){
	d=document.getElementById("d").value;
	a=document.getElementById("a").value;
	perimetro=4*((2*a)+d);
	document.getElementById('perimetro').innerHTML= perimetro+' m';
	}calcular();
</script>
<?php
if(isset($_GET)) print_r($_GET);
?>
<h1> Ejercicio 2 <h1/>
<h2> Una pirámide cuadrada tiene por perímetro de la base 60 cm. Calcula el volumen si la altura es de 25 cm</h2>
<form>
Perimetro<input id="p" name="p" placeholder="perimetro" value="60" onkeyup="calcular()" />
Altura<input id="a" name="a" placeholder="altura" value="25" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular </button>
</form>
<div id="Volumen" style="
padding:20px;
">
Volumen
</div>
<script>
//alert('hola')
//console.log('hola otra vez')
function calcular(){
	p=document.getElementById("p").value;
	a=document.getElementById("a").value;
	volumen=(((1/3)*(p)*(a))/4);
	document.getElementById('volumen').innerHTML= volumen+'cm';
	}calcular();
</script>
<?php
if(isset($_GET)) print_r($_GET);
?>
<h1> Ejercicio 3<h1/>
<h2> Una tienda ha vendido 60 ordenadores, cuyo precio original era de 1200 EUR, con un descuento del 20% a unos y del 25% a otros. Si se han recaudado 56.400 EUR, calcule a cuántos ordenadores se les rebajó el 25%</h2>
<form>
Cantidad de porcentaje<input id="c" name="c" placeholder="cant" value="20" onkeyup="calcular()" />
<button onclick="calcular()"> Calcular </button>
</form>
<div id="cant" style="
padding:20px;
">
cant
</div>
<script>
//alert('hola')
//console.log('hola otra vez')
function calcular(){
	x=document.getElementById("c").value;
	cant=((1200*c)/100);
	document.getElementById('cant').innerHTML= cant+'euros';
	}calcular();
</script>
Cantidad de porcentaje<input id="h" name="h" placeholder="cantt" value="25" onkeyup="calcular()" />
<button onclick="calcular()"> Calcular </button>
</form>
<div id="cantt" style="
padding:20px;
">
cantt
</div>
<script>
//alert('hola')
//console.log('hola otra vez')
function calcular(){
	x=document.getElementById("h").value;
	cant=((1200*h)/100);
	document.getElementById('cantt').innerHTML= cantt+'euros';
	}calcular();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>
<h1> Ejercicio 4<h1/>
<h2>Se dispone de un cartón cuadrado de 50 cm de lado para construir una caja sin tapa a partir de ese cartón. Para ello, se corta un cuadrado de x cm de lado en cada una de las esquinas. Halla el valor de x para que el volumen de la caja sea máximo y calcula dicho volumen</h2>
<form>
Cantidad de porcentaje<input id="c" name="c" placeholder="cant" value="20" onkeyup="calcular()" />
<button onclick="calcular()"> Calcular </button>
</form>
<div id="cant" style="
padding:20px;
">
cant
</div>
<script>
//alert('hola')
//console.log('hola otra vez')
function calcular(){
	x=document.getElementById("c").value;
	cant=((1200*c)/100);
	document.getElementById('cant').innerHTML= cant+'euros';
	}calcular();
</script>
Cantidad de porcentaje<input id="h" name="h" placeholder="cantt" value="25" onkeyup="calcular()" />
<button onclick="calcular()"> Calcular </button>
</form>
<div id="cantt" style="
padding:20px;
">
cantt
</div>
<script>
//alert('hola')
//console.log('hola otra vez')
function calcular(){
	x=document.getElementById("h").value;
	cant=((1200*h)/100);
	document.getElementById('cantt').innerHTML= cantt+'euros';
	}calcular();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>