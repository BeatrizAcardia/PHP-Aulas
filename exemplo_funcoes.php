<?php

    function calcMedia ($n1, $n2){
        $media = ($n1 + $n2)/2;
        return $media;
    }

    $media = calcMedia(7.0, 9.0);

    $msg = "Média = " . $media . "<br>";

    if($media >= 6.0){
        $msg = $msg . "<br><span id='aprovado'>APROVADO!</span>";
    } else {
       $msg = $msg . "<br><span id='aprovado'>REPROVADO!</span>"; 
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <style>
        #reprovado{
            background-color: red;
            color: white;
            font-weight: bold;
        }
        #aprovado{
            background-color: green;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
   <?= $msg ?> 
</body>
</html>