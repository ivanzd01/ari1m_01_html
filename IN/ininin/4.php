<h1> Ejercicio 4 <h1/>
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
	document.getElementById('g').innerHTML= g+' cm';
	document.getElementById('ma').innerHTML= ma+' cm cubicos';
	}calcular();
</script>
<?php
if(isset($_GET)) print_r($_GET);
?>