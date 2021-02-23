<center><h1>Ejercicio 40</h1></center>
<h2> ¿Cuántas provincias con nombre compuesto tiene cada comunidad autónoma?</h2>
<?php include('datos.php');
$autonomias=[];
$aut='';
foreach($provincias as $p){
if($aut!=$p['autonomia']){
$aut=$p['autonomia'];
$autonomias[$aut]['poblacion']=0;}
$autonomias[$aut]['poblacion']+=$p['poblacion'];}
print_r($autonomias);
?>
<script>
</script>