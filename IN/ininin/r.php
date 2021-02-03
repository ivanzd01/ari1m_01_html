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
	X=Math.round(X*100)/100;
	document.getElementById('X').innerHTML= X+'metros lineales son necesarios.';
	}determinar();
</script>
<?php
<br>
<h1><center>Ejercicio 2</center></h1>
	<br>
	<h2><center>
		Se quiere construir un jardin de 1 m de ancho 
		alrededor de una fuente circular de 4 m de diametro. 
		Si los paquetes de cesped fuesen de 7 m2, 
		¿cuantos paquetes harían falta comprar para cubrir el jardin?
	</center><h2>
	<center><image src="Fuente 4m.png" height="500px" Width="500px"></center>

<form>
	<input name="Radio fuente" id="f" value="4" placeholder="Fuente" onkeyup="Calcular()"/> 
	<input name="Radio jardin"id="j" value="1" placeholder="Jardín" onkeyup="Calcular()"/>
	<input name="Tamaño de paquetes"id="tp" value="7" placeholder="Tamaño de paquetes" onkeyup="Calcular()"/> 
<button onclick="resolver()">
Calcular</button>
</form>

<div id="c" style="
	padding:20px;
	background-color:grey
">
Metros de cesped
</div>

<div id="m" style="
	padding:20px;
	background-color:grey
">
Numero de paquetes
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");
function determinar(){
	f=document.getElementById("f").value;
	j=document.getElementById("j").value;
	tp=document.getElementById("tp").value;
	f=parseInt(f);
	j=parseInt(j);
	m=parseInt(m);
	tp=parseInt(tp);
	c=parseInt(c);
	c=Math.round(3.141592*((f+j)*(f+j))-(f*f));
	m=Math.round(c/tp);
	document.getElementById("m").innerHTML=m+" Paquetes";
	document.getElementById("c").innerHTML=c+" m2 de cesped";
} Calcular();
</script>


<?php
if(isset($_GET['m'])){
$f = $_GET['f'];
$j = $_GET['j'];
$tp = $_GET['tp'];
$m = $_GET['m'];
$c = $_GET['c'];
echo $Math.round(3.141592*(($f+$j)*($f+$j))-($f*$f));
echo $Math.round($c/$tp);
}

?>
<br>

<h1><center>Ejercicio 3</center></h1>
	<br>
	<h2><center>La edad de Sara es el triple que la de su hija. Dentro de 14 años será el doble. ¿Qué edades tienen Sara y su hija?</center><h2>

<form>
		Introducir cuantas veces más años tiene la madre (3 veces más=3)
	<input name="Sara" id="s2" value="3" placeholder="Madre)" onkeyup="resolver()"/> 
		Introducir hija (siempre 1)
	<input name="hija"id="h" value="1" placeholder="Hija" onkeyup="resolver()"/> 
<button onclick="resolver()">
resolver</button>
</form>

<div id="esara" style="
	padding:20px;
	background-color:grey
">
Edad de Sara
</div>
<div id="ehija" style="
	padding:20px;
	background-color:grey
">
Edad Hija
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");

function calcular(){
	s2=document.getElementById("s2").value;
	h=document.getElementById("h").value;
	s2=parseInt(s2);
	h=parseInt(h);
	ehija=parseInt(ehija);
	esara=parseInt(esara);
	y=h*14;
	x=2*y+14;
	esara=s2*y;
	ehija=y;
	document.getElementById("esara").innerHTML=esara+" Años";
	document.getElementById("ehija").innerHTML=ehija+" Años";
} resolver();
</script>


<?php
if(isset($_GET['m'])){
$e = $_GET['e'];
$s = $_GET['s'];
$e = $_GET['e'];
$e = $_GET['e'];
$e = $_GET['e'];
$e = $_GET['e'];
echo $Math.round(3.141592*((($e+$s)*($e+$s))-($e*$e)));
}

?>
<br>

<h1><center>Ejercicio 4</center></h1>
	<br>
	<h2><center>De entre todos los triánculos rectángulos de área 8 cm2, determina las dimensiones del que tiene la hipotenusa de menor longitud</center><h2>
	<center><image src="Triángulos.png" height="500px" Width="800px"></center>

<form>
	<input name="Area" id="area" value="8" placeholder="Area(cm2)" onkeyup="solucion()"/> 
<button onclick="solucion()">
solucion</button>
</form>

<div id="h" style="
	padding:20px;
	background-color:grey
">
solucion
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");
function determinar(){
	area=document.getElementById("area").value;
	area=parseInt(area);
	x=parseInt(x);
	y=parseInt(y);
	var x=4;
	var y=16/x;
	l=((x*x*x*x)+256)/x*x;
	h=Math.round(Math.sqrt(l));
	area=(x*y)/2;
	document.getElementById("h").innerHTML=h+" centimetros";
} solucion();
</script>


<?php
if(isset($_GET['h'])){
$e = $_GET['area'];
$s = $_GET['x'];
$s = $_GET['y'];
$s = $_GET['l'];
$s = $_GET['h'];
echo (($x*$x*$x*$x)+256)/$x*$x;
echo $Math.round($Math.sqrt(l));
echo ($x*$y)/2;
}

?>