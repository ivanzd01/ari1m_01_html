<h1> Ejercicio 1 </h1>
<h2>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Para rodear el jardín con una valla, ¿cuántos m lineales son necesarios?</h2>
<form>
Radio fuente<input id="R" name="R" placeholder="Radio fuente" value="4" onkeyup="calcular()"/>
Ancho jardín<input id="r" name="r" placeholder="Ancho jardin" value="1" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular </button>
</form>
<div id="X" style="
padding:20px;
">
Resultado
</div>
<script>
//alert('hola mundo')
//console.log('hola otra vez')
function calcular(){
	R=document.getElementById("R").value;
	r=document.getElementById("r").value;
	r=parseInt(r);
	R=parseInt(R);
	X= 2*Math.PI*(R+r);
	document.getElementById('X').innerHTML= X+'m';
	}calcular();
</script>
<?php
//if(isset($_GET)) print_r($_GET);
?>