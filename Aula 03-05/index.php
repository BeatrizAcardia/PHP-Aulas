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

    $str = str_split("$texto", 3);
    print_r($str);

    //Encontra a posição da primeira ocorrência de uma string
    echo strpos($texto, "unicamp") . "<br>";

    $email = "cl202243@g.unicamp.br";

    //retorna a string após o caractere informado
    echo strchr($email, "@") . "<br>";

    //retorna uma parte de uma String
    echo substr('abcdef', 1) . "<br>";

    echo substr('abcdef', 1, 3) . "<br>";

    echo str_replace("i", "X", $texto) . "<br>";

    $valor = "0";
    $valor +=2;
    $valor = $valor + 1.3;
    echo $valor;
    echo "<br>";

    $senha = "minhasenha";

    echo "<br> *** md5 ***<br>";

    $x = md5($senha);
    echo ($x);
    echo "<br>";

    if(md5($senha) == $x){
        echo "Senha ok! <br><br>";
    }

    //com salt - Uma string salt para base de encriptação
    $salt = "c0tilUn1camp";
    $senha = $senha . $salt;
    echo "senha = " . $senha;
    echo "<br>";
    
    $x = md5($senha);
    echo ($x);
    echo "<br>";

    if (md5($senha) == $x){
        echo "Senha ok!<br><br>";
    }

    echo "<br> *** sha1 ***<br>";
    $x = sha1($senha);
    echo $x;
    echo "<br>";

    if(sha1($senha) == $x){
        echo "Senha ok! <br><br>";
    }

    echo "<br> *** crypt ***<br>";

    $x = crypt($senha, "c0tilUn1camp");
    echo $x;
    echo "<br>";

    if (crypt($senha, "") == $x){
        echo "Senha ok! <br><br>";
    }

    $string = 'hfhfhfhfhf';
    $codificada = base64_encode($string);
    echo "Resultado:" . $codificada;

    echo "<br>";

    $original = base64_decode($codificada);
    echo "Resultado: " . $original;

?>