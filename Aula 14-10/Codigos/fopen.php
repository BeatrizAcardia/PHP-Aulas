<?php
$filename = fopen("log.txt", 'a+');

$user = "siberbet";
$func = "exclusaoAluno.php";
$op = "exclusao";

fwrite($filename, $user . '-' . $func . '-' . $op . date("Y-m-d H:i:s") . "\n\n");

echo "Tamanho do Arquivo " . filesize("log.txt") . "<br>";

fclose($filename);

echo "Arquivo criado com sucesso";
