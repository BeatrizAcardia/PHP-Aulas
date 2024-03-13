<?php
//

if($_SERVER["REQUEST_METHOD"] === 'GET'){
    $media = "";
    $situacao = "";
} else if($_SERVER["REQUEST_METHOD"] === 'POST'){

        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];

        if((trim($nota1) != "") && (trim($nota2) != "")){
                $media = ($nota1+$nota2)/2;

                if ($media >= 6){
                    $situacao = "<span class='ap'>Aprovado!</span>";
                }else if (($media > 3) && ($media < 6)){
                    $situacao = "<span class='dp'>Dependencia!</span>";
                }else{
                    $situacao = "<span class='rep'>Reprovado!</span>";}
            } else {
                $situacao = "Informe as duas notas";
            }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>

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
    <h1>Calculo de Média</h1>
    <hr>
    <form method="post">
        <input type="hidden" name="op" value="save">

        Nota 1:<br>
        <input type="text" name="nota1" id="nota1">

        <br><br>

        Nota 2:<br>
        <input type="text" name="nota2" id="nota2">
        
        <hr>

        <input type="submit" value="Cadastrar">
        <hr>
        <br>
        Média: <?= $media ?>
        <br>
        <?= $situacao?>
    </form>
</body>
</html>