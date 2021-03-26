<center><h1>Ejercicio 16</h1></center>
<h2>¿Qué autonomías tienen provincias de más de un millón de habitantes? Ordénalas alfabéticamente</h2>
<?php include('datos.php');
$autonomias=[];
$aut='';
foreach($provincias as $p){
if($aut!=$p['autonomia']){
$aut=$p['autonomia'];
$autonomias[$aut]['poblacion']=0;}
$autonomias[$aut]['poblacion']+=$p['poblacion'];}
print_r($autonomias);