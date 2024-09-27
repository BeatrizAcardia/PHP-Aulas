<?php
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];;

    if((trim($nota1) != "") && (trim($nota2) != "")){
        $media = ($nota1+$nota2)/2;

        echo "Média = " . $media;
        echo "<hr>";

        if ($media >= 6){
            echo "<span class='ap'>Aprovado!</span>";
        }else if (($media > 3) && ($media < 6)){
            echo "<span class='dp'>Dependencia!</span>";
        }else{
        echo "<span class='rep'>Reprovado!</span>";}
        } else {
            echo "Informe as duas notas";
        }
?>