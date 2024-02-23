<?php
    
    $nota1 = 5;
    $nota2 = 10;
    $media = ($nota1+$nota2)/2;

    if ($media >= 6){
        $situacao = "Aprovado";
        $formatacao = 'ap';
    }else if (($media > 3) && ($media < 6)){
        $situacao = "Dependência";
        $formatacao = 'dp';
    }else{
        $situacao = "Reprovado";
        $formatacao = 'rep';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>

    <style>
        .ap{
            color: white;
            background-color: green;
        }
        .dp{
            color: black;
            background-color: yellow;
        }
        .rep{
            color: white;
            background-color: red;
        }
    </style>

</head>
<body>

        <?= $media ?>

        <hr>

        <span class = '<?= $formatacao ?>'>
            <?= $situacao ?>
        </span>

</body>
</html>