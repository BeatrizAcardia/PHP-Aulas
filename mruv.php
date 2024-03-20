<?php
    $aceleracao = $_GET["aceleracao"];
    $velocidade0 = $_GET["velocidade0"];
    $tempo = $_GET["tempo"];

    if((trim($aceleracao) != "") && (trim($velocidade0) != "") && (trim($tempo) != "" ) ){
        $velocidade = $velocidade0 + $aceleracao*$tempo ;

        echo "Velocidade = " . $velocidade . "m/s";
        echo "<hr>";

        if ($velocidade < 100){
            echo "<span class='ap'>Você não está acima da velocidade permitida</span>";
        } else{
        echo "<span class='rep'>Você está acima da velocidade permitida!!!</span>";
        }
    } else {
        echo "Informe todos os dados";
    }
?>