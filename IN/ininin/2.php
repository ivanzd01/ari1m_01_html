<h1> Ejercicio 2 </h1>
<h2> Una pirámide cuadrada tiene por perímetro de la base 60 cm. Calcula el volumen si la altura es de 25 cm</h2>
<form>
Perimetro<input id="p" name="p" placeholder="Perimetro" value="60" onkeyup="calcular()"/>
Altura<input id="h" name="h" placeholder="Altura" value="25" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular </button>
</form>
<div id="b" style="
padding:20px;
">
Resultado
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function calcular(){
	p=document.getElementById("p").value;
	h=document.getElementById("h").value;
	b=(((1/3)*(p)*(h))/4);
	document.getElementById('b').innerHTML= b+'cm';
	}calcular();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>