<?php
//1 jeito de atribuir
$aExemplo = array(198765,3,"José Alberto Matioli");

//2 jeito de atribuir
/*$aExemplo[0] = 198765;
$aExemplo[1] = 3;
$aExemplo[2] = "José Alberto Matioli";*/


echo $aExemplo[0] . " - " . $aExemplo[2];

$aExemplo[2] = "J. A. Matioli";

echo "<br>";

echo $aExemplo[0] . " - " . $aExemplo[2];

?>