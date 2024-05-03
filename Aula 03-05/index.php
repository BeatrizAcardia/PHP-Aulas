<?php

    $texto = "  cotil - unicamp  ";

    //trim - Retira espaço no início e final de uma string
    echo "-" . trim($texto) . "-" . "<br>";

    //ltrim - Retira espaço em branco (ou outros caracteres) no início de uma string
    echo "-" . ltrim($texto) . "-" . "<br>";

    //rtrim - Retira espaço em branco (ou outros caracteres) no final de uma string
    echo "-" . rtrim($texto) . "-" . "<br>";

    //tudo maiúsculo
    echo strtoupper($texto);

    //tudo minúsculo
    echo strtolower($texto);

    //1a tudo maiúsculo
    echo ucfirst($texto);

    //1a tudo maiúsculo
    echo ucwords($texto);

    echo strlen($texto);

    echo strrev($texto);

?>