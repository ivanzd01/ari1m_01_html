<center><h1>Ejercicio 50</h1></center>
<h2> Provincia más poblada de la autonomía más despoblada</h2>
<?php include('datos.php');
$autonomias=[];
$aut='';
foreach($provincias as $p){
if($aut!=$p['autonomia']){
$aut=$p['autonomia'];
$autonomias[$aut]=0;}
$autonomias[$aut]+=$p['poblacion'];}
//foreach($autonomia as $a)
print_r($autonomias);
?>