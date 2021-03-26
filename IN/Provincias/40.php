<center><h1>Ejercicio 40</h1></center>
<h2> ¿Cuántas provincias con nombre compuesto tiene cada comunidad autónoma?</h2>
<?php include('datos.php');
$as=[];
	foreach ($provincias as $p)
		if (strstr ($p['provincia'],' '))
		$as[]=$p['autonomia'];
	asort($as);
	foreach (array_unique ($as) as $o){
		echo $o."<br/>";
	}
?>