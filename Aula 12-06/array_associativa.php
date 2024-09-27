<?php

$aExemplo = array("ra" => 15252,
"serie" => 3,
"nome" => "Juliana Gomes");

print_r($aExemplo);
echo "<br><br>";
echo $aExemplo ["ra"] . " - " . $aExemplo["nome"];
echo "<br>";
$aExemplo["nome"]= "J. A. Matioli";
echo "<br>";
echo $aExemplo ["ra"] . " - " . $aExemplo["nome"];

?>