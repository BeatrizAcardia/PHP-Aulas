<?php

$aExemplo1 = array("ra" => 15252,
                    "serie" => 3,
                    "aluno" => array("nome" => "João",
                    "sobrenome" => "da Silva"));

$aExemplo2["ra"]= 12054;
$aExemplo2["serie"]= 6;
$aExemplo2["aluno"]["nome"]= "Juninho";
$aExemplo2["aluno"]["sobrenome"]= "Gaymer";

echo $aExemplo1["ra"] . " - ";
echo $aExemplo1["serie"]. " - ";
echo $aExemplo1["aluno"]["nome"]. " - ";
echo $aExemplo1["aluno"]["sobrenome"];
echo "<br><br>";
echo $aExemplo2["ra"] . " - ";
echo $aExemplo2["serie"]. " - ";
echo $aExemplo2["aluno"]["nome"]. " - ";
echo $aExemplo2["aluno"]["sobrenome"];

?>